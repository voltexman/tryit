<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramMessage;

class FeedbackSent extends Notification
{
    use Queueable;

    public object $feedback;

    public function __construct(object $feedback)
    {
        $this->feedback = $feedback;
    }

    public function via(): array
    {
        return ['mail', 'telegram'];
    }

    public function toMail(): MailMessage
    {
        return (new MailMessage)
            ->greeting('Зворотній зв`язок')
            ->subject(env('APP_NAME').' - Зворотній зв`яок')
            ->lineIf($this->feedback->name, "**Ім`я:** {$this->feedback->name}")
            ->line("**Повідомлення:** {$this->feedback->text}");
    }

    public function toTelegram(): TelegramMessage
    {
        return TelegramMessage::create()
            ->line('*Зворотній зв`язок*')
            ->lineIf((bool) $this->feedback->name, "*Ім`я:* {$this->feedback->name}")
            ->line("*Повідомлення:* {$this->feedback->text}");
    }
}
