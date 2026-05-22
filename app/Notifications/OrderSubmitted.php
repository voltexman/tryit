<?php

namespace App\Notifications;

use App\Filament\Resources\Orders\OrderResource;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramFile;
use NotificationChannels\Telegram\TelegramMediaGroup;
use NotificationChannels\Telegram\TelegramMessage;

class OrderSubmitted extends Notification
{
    use Queueable;

    public function __construct(public Order $order) {}

    public function via(object $notifiable): array
    {
        return ['mail', 'telegram'];
        // $channels = ['mail', 'telegram'];

        // if (config('services.telegram-bot-api.token') && config('services.telegram-bot-api.chat_id')) {
        //     $channels[] = TelegramChannel::class;
        // }

        // return $channels;
    }

    public function toMail(object $notifiable): MailMessage
    {
        $serviceName = $this->order->service?->value ?? 'Не вказано';

        $message = (new MailMessage)
            ->subject("Нове замовлення послуги: {$serviceName}")
            ->greeting('Нове замовлення!')
            ->line('**Деталі замовлення:**')
            ->line("- **Ім'я:** {$this->order->name}")
            ->line("- **Контакт:** {$this->order->contact}")
            ->lineIf($this->order->address, "- **Адреса:** {$this->order->address}")
            ->line("- **Послуга:** {$serviceName}")
            ->lineIf($this->order->square_area, "- **Площа:** {$this->order->square_area} м²")
            ->lineIf($this->order->room_count, "- **Кімнат:** {$this->order->room_count}")
            ->lineIf($this->order->floor_count, "- **Поверхів:** {$this->order->floor_count}")
            ->lineIf($this->getContaminationLevel(), '- **Рівень забруднення:** ' . $this->getContaminationLevel())
            ->lineIf($this->getConditionsString(), '- **Умови на об\'єкті:** ' . $this->getConditionsString())
            ->lineIf($this->order->text, "- **Коментар клієнта:** {$this->order->text}");

        if ($url = $this->getAdminUrl()) {
            $message->action('Переглянути замовлення', $url);
        }

        return $message;
    }

    public function toTelegram(object $notifiable): TelegramMessage|TelegramFile|TelegramMediaGroup
    {
        $serviceName = $this->order->service?->value ?? 'Не вказано';

        $lines = array_filter([
            '*Нове замовлення!*',
            '',
            '*Деталі замовлення:*',
            "- *Ім'я:* {$this->order->name}",
            "- *Контакт:* {$this->order->contact}",
            $this->order->address ? "- *Адреса:* {$this->order->address}" : null,
            "- *Послуга:* {$serviceName}",
            $this->order->square_area ? "- *Площа:* {$this->order->square_area} м²" : null,
            $this->order->room_count ? "- *Кімнат:* {$this->order->room_count}" : null,
            $this->order->floor_count ? "- *Поверхів:* {$this->order->floor_count}" : null,
            $this->getContaminationLevel() ? '- *Рівень забруднення:* ' . $this->getContaminationLevel() : null,
            $this->getConditionsString() ? '- *Умови на об\'єкті:* ' . $this->getConditionsString() : null,
            $this->order->text ? "- *Коментар клієнта:* {$this->order->text}" : null,
        ], fn($line) => $line !== null);

        $content = implode("\n", $lines);
        $chatId = config('services.telegram-bot-api.chat_id');
        $url = $this->getAdminUrl();

        $validMediaPaths = collect($this->order->getMedia('orders'))
            ->map(fn($media) => $media->getPath())
            ->filter(fn($path) => file_exists($path))
            ->values()
            ->all();

        if (count($validMediaPaths) > 1) {
            $message = TelegramMediaGroup::create()->to($chatId);

            if ($url) {
                $content .= "\n\n[🔗 Переглянути замовлення]({$url})";
            }

            foreach ($validMediaPaths as $index => $path) {
                $message->photo($path, $index === 0 ? $content : null);
            }
        } else {
            $message = count($validMediaPaths) === 1
                ? TelegramFile::create()->to($chatId)->photo($validMediaPaths[0])->content($content)
                : TelegramMessage::create()->to($chatId)->content($content);

            if ($url) {
                $message->button('Переглянути замовлення', $url);
            }
        }

        return $message;
    }

    private function getContaminationLevel(): ?string
    {
        return match ((string) $this->order->contamination_level) {
            '1' => '✨ Мінімальне (Пилок)',
            '2' => '🧹 Легке (Дрібне)',
            '3' => '🧼 Середнє (Звичайне)',
            '4' => '💪 Важке (Забруднено)',
            '5' => '🔥 Критичне (Ремонт)',
            default => null,
        };
    }

    private function getConditionsString(): ?string
    {
        $conditions = array_filter([
            $this->order->has_elevator ? '🛗 ліфт' : null,
            $this->order->has_water ? '🚰 вода' : null,
            $this->order->has_parking ? '🅿️ паркування' : null,
        ]);

        return ! empty($conditions) ? implode(', ', $conditions) : null;
    }

    private function getAdminUrl(): ?string
    {
        try {
            return OrderResource::getUrl('view', ['record' => $this->order]);
        } catch (\Exception) {
            return null;
        }
    }
}
