<?php

namespace App\Notifications;

use App\Models\Feedback;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramMediaGroup;
use NotificationChannels\Telegram\TelegramMessage;

class FeedbackSubmitted extends Notification
{
    use Queueable;

    public function __construct(public Feedback $feedback) {}

    public function via(object $notifiable): array
    {
        return ['mail', 'telegram'];
    }

    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject("Нове повідомлення зворотного зв'язку: {$this->feedback->topic->getLabel()}")
            ->greeting('Нове повідомлення зворотного зв\'язку!')
            ->line('**Деталі повідомлення:**')
            ->lineIf($this->feedback->name, "- **Ім'я:** {$this->feedback->name}")
            ->lineIf($this->feedback->contact, "- **Контакт:** {$this->feedback->contact}")
            ->line("- **Тема:** {$this->feedback->topic->getLabel()}")
            ->lineIf($this->feedback->service, '- **Послуга:** '.$this->feedback->service?->getLabel())
            ->lineIf($this->feedback->rating, "- **Оцінка:** {$this->feedback->rating} / 5 ⭐")
            ->line("- **Повідомлення:** {$this->feedback->text}");
    }

    public function toTelegram(object $notifiable): TelegramMessage|TelegramFile|TelegramMediaGroup
    {
        $chatId = config('services.telegram-bot-api.chat_id');
        $content = $this->buildMessageContent();

        $validMediaPaths = collect($this->feedback->getMedia('feedback'))
            ->map(fn ($media) => $media->getPath())
            ->filter(fn ($path) => file_exists($path))
            ->values()
            ->all();

        if (count($validMediaPaths) > 1) {
            $message = TelegramMediaGroup::create()->to($chatId);
            foreach ($validMediaPaths as $index => $path) {
                $message->photo($path, $index === 0 ? $content : null);
            }

            return $message;
        }

        if (count($validMediaPaths) === 1) {
            return TelegramFile::create()
                ->to($chatId)
                ->photo($validMediaPaths[0])
                ->content($content);
        }

        return TelegramMessage::create()
            ->to($chatId)
            ->content($content);
    }

    private function buildMessageContent(): string
    {
        $lines = array_filter([
            '*Зворотній зв\'язок!*',
            '',
            $this->feedback->name ? "- *Ім'я:* {$this->feedback->name}" : null,
            $this->feedback->contact ? "- *Контакт:* {$this->feedback->contact}" : null,
            "- *Тема:* {$this->feedback->topic->getLabel()}",
            $this->feedback->service ? '- *Послуга:* '.$this->feedback->service->getLabel() : null,
            $this->feedback->rating ? '- *Оцінка:* '.str_repeat('⭐', $this->feedback->rating) : null,
            "- *Повідомлення:* {$this->feedback->text}",
        ]);

        return implode("\n", $lines);
    }
}
