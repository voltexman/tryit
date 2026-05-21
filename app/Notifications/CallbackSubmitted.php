<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class CallbackSubmitted extends Notification
{
    use Queueable;

    public function __construct(public string $phone) {}

    public function via(object $notifiable): array
    {
        return config('services.telegram-bot-api.token') && config('services.telegram-bot-api.chat_id')
            ? [TelegramChannel::class]
            : [];
    }

    public function toTelegram(object $notifiable): TelegramMessage
    {
        return TelegramMessage::create()
            ->to(config('services.telegram-bot-api.chat_id'))
            ->line('*Прохання передзвонити:*')
            ->line($this->phone)
            ->line('_Зараз очікує на дзвінок_');
    }
}
