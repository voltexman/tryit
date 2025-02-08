<?php

namespace App\Enums;

enum OrderStatus: string
{
    const NEW = 'new';

    const VIEWED = 'viewed';

    const DONE = 'done';

    public static function map(): array
    {
        return [
            self::NEW => 'new',
            self::VIEWED => 'viewed',
            self::DONE => 'done',
        ];
    }
}
