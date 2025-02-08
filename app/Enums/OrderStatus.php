<?php

namespace App\Enums;

enum OrderStatus: string
{
    const NEW = 'new';
    const VIEWED = 'viewed';
    const DONE = 'done';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
