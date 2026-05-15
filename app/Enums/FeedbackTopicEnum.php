<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum FeedbackTopicEnum: string implements HasLabel
{
    case GENERAL = 'general';
    case COMPLAINT = 'complaint';
    case PROPOSAL = 'proposal';
    case GRATITUDE = 'gratitude';
    case OTHER = 'other';

    public function getLabel(): string
    {
        return match ($this) {
            self::GENERAL => 'Загальне питання',
            self::COMPLAINT => 'Скарга',
            self::PROPOSAL => 'Пропозиція',
            self::GRATITUDE => 'Подяка',
            self::OTHER => 'Інше',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
