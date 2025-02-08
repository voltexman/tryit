<?php

namespace App\Enums;

enum ServiceEnum: string
{
    case WINDOW_CLEANING = 'Миття фасадів та вікон на висоті';
    case SOLAR_PANEL_CLEANING = 'Мийка та очищення сонячних панелей';
    case POST_CONSTRUCTION_CLEANING = 'Післябудівельне прибирання';
    case INDUSTRIAL_CLEANING = 'Генеральне прибирання цехів та виробництва';
    case DRY_CLEANING = 'Хімчистка';
    case OFFICE_CLEANING = 'Комплексне та підтримуюче прибирання офісу';
    case INDUSTRIAL_ALPINISM = 'Промисловий альпінізм';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
