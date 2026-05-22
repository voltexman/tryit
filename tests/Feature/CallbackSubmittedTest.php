<?php

use App\Notifications\CallbackSubmitted;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

test('телеграм-нотифікація про зворотній дзвінок генерується з правильним текстом та форматуванням', function () {
    config()->set('services.telegram-bot-api.token', 'test-token');
    config()->set('services.telegram-bot-api.chat_id', 'test-chat-id');

    $phone = '+380 (99) 999-99-99';
    $notification = new CallbackSubmitted($phone);

    // Перевірка каналів відправки
    $channels = $notification->via(new stdClass);
    expect($channels)->toContain(TelegramChannel::class);

    // Отримання повідомлення
    $telegramMessage = $notification->toTelegram(new stdClass);
    expect($telegramMessage)->toBeInstanceOf(TelegramMessage::class);

    $payload = $telegramMessage->toArray();
    $text = $payload['text'] ?? '';

    expect($text)->toContain('*Прохання передзвонити:*');
    expect($text)->toContain($phone);
    expect($text)->toContain('_Зараз очікує на дзвінок_');
});
