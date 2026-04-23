<?php

namespace App\Enums;

use Illuminate\Support\Str;

enum ServiceEnum: string
{
    case WINDOW_CLEANING = 'Миття фасадів та вікон на висоті';
    case SOLAR_PANEL_CLEANING = 'Мийка та очищення сонячних панелей';
    case POST_CONSTRUCTION_CLEANING = 'Післябудівельне прибирання';
    case INDUSTRIAL_CLEANING = 'Генеральне прибирання цехів та виробництва';
    case DRY_CLEANING = 'Хімчистка та професійний догляд';
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
            self::WINDOW_CLEANING => 'Забезпечимо ідеальну чистоту вікон та фасадів безпечно та ефективно! Використовуємо сучасну WFP-систему, яка дозволяє мити скло без розводів і слідів. Підходить для будинків, офісів та багатоповерхівок.',
            self::SOLAR_PANEL_CLEANING => 'Видаляємо пил, бруд і наліт, щоб ваші сонячні батареї працювали на повну потужність. Професійна мийка збільшує ефективність панелей на 25-30% та продовжує їхній термін служби.',
            self::POST_CONSTRUCTION_CLEANING => 'Будівництво чи ремонт позаду, а хаос залишився? Ми швидко та якісно приберемо будівельне сміття, пил та бруд. Генеральне прибирання — і об\'єкт готовий до введення в експлуатацію.',
            self::INDUSTRIAL_CLEANING => 'Спеціалізоване прибирання виробничих приміщень, цехів та складів. Ми застосовуємо промислове обладнання та екологічні засоби для найсумніших забруднень. Гарантуємо безпеку та чистоту.',
            self::DRY_CLEANING => 'Професійна хімчистка меблів, килимів та текстильних виробів. Видаляємо навіть складні плями та запахи без пошкодження матеріалу. Результат — як нові речі!',
            self::OFFICE_CLEANING => 'Комплексне та підтримуюче прибирання офісів. Від щоденної прибиральниці до генерального прибирання — ми забезпечуємо професійний рівень чистоти для вашого робочого простору.',
            self::INDUSTRIAL_ALPINISM => 'Мийка фасадів, вікон та очищення висотних конструкцій за допомогою снаряження промислового альпінізму. Безпечно, якісно та в найскладніших місцях.',
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
