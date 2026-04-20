<?php

namespace App\Enums;

use Illuminate\Support\Str;

enum ServiceEnum: string
{
    case WINDOW_CLEANING = 'Миття фасадів та вікон на висоті';
    case SOLAR_PANEL_CLEANING = 'Мийка та очищення сонячних панелей';
    case POST_CONSTRUCTION_CLEANING = 'Післябудівельне прибирання';
    case INDUSTRIAL_CLEANING = 'Генеральне прибирання цехів та виробництва';
    case DRY_CLEANING = 'Хімчистка';
    case OFFICE_CLEANING = 'Комплексне та підтримуюче прибирання офісу';
    case INDUSTRIAL_ALPINISM = 'Промисловий альпінізм';

    public function getSlug(): string
    {
        return Str::slug($this->name);
    }

    public function getTitle(): string
    {
        return $this->value;
    }

    public function getDescription(): string
    {
        return match ($this) {
            self::WINDOW_CLEANING => 'Забезпечимо ідеальну чистоту вікон та фасадів безпечно та ефективно! Використовуємо сучасну WFP-систему, яка дозволяїть мити скло без розводів і слідів.',
            self::SOLAR_PANEL_CLEANING => 'Видаляємо пил, бруд і наліт, щоб ваші батареї працювали на повну потужність.',
            self::POST_CONSTRUCTION_CLEANING => 'Будівництво чи ремонт позаду, а хаос залишився? Ми швидко та якісно приберемо будівельне сміття, пил та бруд.',
            self::INDUSTRIAL_CLEANING => 'Видаляємо пил, бруд і наліт, щоб ваші батареї працювали на повну потужність.',
            self::DRY_CLEANING => 'Видаляємо пил, бруд і наліт, щоб ваші батареї працювали на повну потужність.',
            self::OFFICE_CLEANING => 'Видаляємо пил, бруд і наліт, щоб ваші батареї працювали на повну потужність.',
            self::INDUSTRIAL_ALPINISM => 'Видаляємо пил, бруд і наліт, щоб ваші батареї працювали на повну потужність.',
        };
    }

    public function getImage(): string
    {
        return match ($this) {
            self::WINDOW_CLEANING => 'service-1.jpg',
            self::SOLAR_PANEL_CLEANING => 'service-2.jpg',
            self::POST_CONSTRUCTION_CLEANING => 'service-3.jpg',
            self::INDUSTRIAL_CLEANING => 'service-4.jpg',
            self::DRY_CLEANING => 'service-5.jpg',
            self::OFFICE_CLEANING => 'service-6.jpg',
            self::INDUSTRIAL_ALPINISM => 'service-7.jpg',
        };
    }

    public function getLink(): string
    {
        return match ($this) {
            self::WINDOW_CLEANING => 'services.myttia-fasadu-ta-vikon-na-vysoti',
            self::SOLAR_PANEL_CLEANING => 'services.myika-ta-ochyshchennia-soniachnykh-panelei',
            self::POST_CONSTRUCTION_CLEANING => 'services.pisliabudivelne-prybyrannia',
            self::INDUSTRIAL_CLEANING => 'services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva',
            self::DRY_CLEANING => 'services.khimchystka',
            self::OFFICE_CLEANING => 'services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu',
            self::INDUSTRIAL_ALPINISM => 'services.promyslovyi-alpinizm',
        };
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
