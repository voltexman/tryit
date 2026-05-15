<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum OrderStatus: string implements HasColor, HasIcon, HasLabel
{
    case NEW = 'new';

    case VIEWED = 'viewed';

    case DONE = 'done';

    public function getIcon(): ?string
    {
        return match ($this) {
            self::NEW => 'heroicon-m-magnifying-glass',
            self::VIEWED => 'heroicon-m-eye',
            self::DONE => 'heroicon-m-check',
        };
    }

    public function getColor(): ?string
    {
        return match ($this) {
            self::NEW => 'danger',
            self::VIEWED => 'info',
            self::DONE => 'success',
        };
    }

    public function getLabel(): ?string
    {
        return match ($this) {
            self::NEW => 'Нове',
            self::VIEWED => 'Переглянуто',
            self::DONE => 'Завершене',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
