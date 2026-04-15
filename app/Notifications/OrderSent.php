<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class OrderSent extends Notification
{
    use Queueable;

    public object $order;

    public function __construct(object $order)
    {
        $this->order = $order;
    }

    public function via(): array
    {
        return ['mail', 'telegram'];
    }

    public function toMail(): MailMessage
    {
        return (new MailMessage)
            ->greeting('Замовлення')
            ->lineIf($this->order->name, "**Замовник:** {$this->order->name}")
            ->line("**Контакт:** {$this->order->contact}")
            ->line("**Послуга:** {$this->order->service}")
            ->lineIf($this->order->text, "**Опис:** {$this->order->text}");
    }

    public function toTelegram(): TelegramMessage
    {
        return TelegramMessage::create()
            ->line('*Замовлення*')
            ->lineIf((bool) $this->order->name, "*Замовник:* {$this->order->name}")
            ->line("*Контакт:* {$this->order->contact}")
            ->line("*Послуга:* {$this->order->service}")
            ->lineIf((bool) $this->order->text, "*Опис:* {$this->order->text}");
    }
}
