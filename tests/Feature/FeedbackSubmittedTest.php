<?php

use App\Models\Feedback;
use App\Enums\FeedbackTopicEnum;
use App\Enums\ServiceEnum;
use App\Notifications\FeedbackSubmitted;
use NotificationChannels\Telegram\TelegramMessage;

test('імейл та телеграм-нотифікація про відгук містить усі заповнені деталі', function () {
    config()->set('services.telegram-bot-api.token', 'test-token');
    config()->set('services.telegram-bot-api.chat_id', 'test-chat-id');

    $feedback = Feedback::factory()->create([
        'name' => 'Микола',
        'contact' => '+380998887766',
        'topic' => FeedbackTopicEnum::COMPLAINT,
        'service' => ServiceEnum::DRY_CLEANING,
        'rating' => 4,
        'text' => 'Дуже брудно після прибирання',
    ]);

    $notification = new FeedbackSubmitted($feedback);

    // 1. Тест Email каналу
    $channels = $notification->via(new stdClass);
    expect($channels)->toContain('mail');
    expect($channels)->toContain(\NotificationChannels\Telegram\TelegramChannel::class);

    $mailMessage = $notification->toMail(new stdClass);
    $mailContent = implode("\n", $mailMessage->introLines);

    expect($mailContent)->toContain("- **Ім'я:** Микола");
    expect($mailContent)->toContain("- **Контакт:** +380998887766");
    expect($mailContent)->toContain("- **Тема:** Скарга");
    expect($mailContent)->toContain("- **Послуга:** Хімчистка та професійний догляд");
    expect($mailContent)->toContain("- **Оцінка:** 4 / 5 ⭐");
    expect($mailContent)->toContain("- **Повідомлення:** Дуже брудно після прибирання");

    // 2. Тест Telegram каналу
    $telegramMessage = $notification->toTelegram(new stdClass);
    expect($telegramMessage)->toBeInstanceOf(TelegramMessage::class);

    $payload = $telegramMessage->toArray();
    $telegramText = $payload['text'] ?? '';

    expect($telegramText)->toContain('*Зворотній зв\'язок!*');
    expect($telegramText)->toContain("- *Ім'я:* Микола");
    expect($telegramText)->toContain("- *Контакт:* +380998887766");
    expect($telegramText)->toContain("- *Тема:* Скарга");
    expect($telegramText)->toContain("- *Послуга:* Хімчистка та професійний догляд");
    expect($telegramText)->toContain("- *Оцінка:* ⭐⭐⭐⭐");
    expect($telegramText)->toContain("- *Повідомлення:* Дуже брудно після прибирання");
});
