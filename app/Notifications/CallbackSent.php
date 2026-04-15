<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class CallbackSent extends Notification
{
    use Queueable;

    public object $callback;

    public function __construct(object $callback)
    {
        $this->callback = $callback;
    }

    public function via(): array
    {
        return ['telegram'];
    }

    public function toTelegram(): TelegramMessage
    {
        return TelegramMessage::create()
            ->line('*Прохання передзвонити*')
            ->line("*Телефон:* {$this->callback->phone}")
            ->line('_Зараз очікує дзвінка..._');
    }
}
