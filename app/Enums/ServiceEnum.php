<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum ServiceEnum: string implements HasLabel
{
    case WINDOW_CLEANING = 'myttia-fasadiv-ta-vikon-na-vysoti';
    case SOLAR_PANEL_CLEANING = 'myika-ta-ochyshchennia-soniachnykh-panelei';
    case POST_CONSTRUCTION_CLEANING = 'pisliabudivelne-prybyrannia';
    case INDUSTRIAL_CLEANING = 'heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva';
    case DRY_CLEANING = 'khimchystka';
    case OFFICE_CLEANING = 'kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu';
    case INDUSTRIAL_ALPINISM = 'promyslovyi-alpinizm';

    public function getLabel(): string
    {
        return match ($this) {
            self::WINDOW_CLEANING => 'Миття фасадів та вікон на висоті',
            self::SOLAR_PANEL_CLEANING => 'Мийка та очищення сонячних панелей',
            self::POST_CONSTRUCTION_CLEANING => 'Післябудівельне прибирання',
            self::INDUSTRIAL_CLEANING => 'Генеральне прибирання цехів та виробництва',
            self::DRY_CLEANING => 'Хімчистка',
            self::OFFICE_CLEANING => 'Комплексне та підтримуюче прибирання офісу',
            self::INDUSTRIAL_ALPINISM => 'Промисловий альпінізм',
        };
    }

    public function caption(): string
    {
        return match ($this) {
            self::WINDOW_CLEANING => 'Очищення фасадів, скляних поверхонь і вікон будь-якої висоти.',
            self::SOLAR_PANEL_CLEANING => 'Миття сонячних панелей без пошкодження покриття.',
            self::POST_CONSTRUCTION_CLEANING => 'Прибирання після ремонту чи будівництва, видалення пилу та сміття.',
            self::INDUSTRIAL_CLEANING => 'Очищення цехів, складів і виробничих зон.',
            self::DRY_CLEANING => 'Хімчистка меблів, килимів та текстилю.',
            self::OFFICE_CLEANING => 'Регулярне або разове прибирання офісів для підтримки чистоти та комфорту.',
            self::INDUSTRIAL_ALPINISM => 'Виконання висотних робіт та очищення фасадів.',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::WINDOW_CLEANING => 'Надаємо професійні послуги миття фасадів і вікон на будь-якій висоті з використанням безпечного обладнання та сучасних миючих засобів. Гарантуємо блискучий результат без пошкодження поверхні та максимально швидке виконання робіт.',
            self::SOLAR_PANEL_CLEANING => 'Очищення та миття сонячних панелей для підвищення ефективності та довговічності системи. Використовуємо спеціальні засоби, які не ушкоджують покриття і видаляють пил, бруд та пташиний послід.',
            self::POST_CONSTRUCTION_CLEANING => 'Комплексне прибирання після ремонту або будівництва: видалення пилу, сміття, залишків будівельних матеріалів, полірування та дезінфекція поверхонь. Забезпечуємо повну готовність приміщення до використання.',
            self::INDUSTRIAL_CLEANING => 'Генеральне прибирання промислових приміщень, цехів, складів та виробничих зон з використанням спеціальної техніки та засобів. Видаляємо бруд, масла, пил та інші забруднення для безпечного та ефективного виробничого середовища.',
            self::DRY_CLEANING => 'Професійна хімчистка меблів, килимів, текстилю та інших поверхонь із використанням безпечних та ефективних засобів. Відновлюємо первісний вигляд тканин та забезпечуємо чистоту без пошкоджень.',
            self::OFFICE_CLEANING => 'Регулярне та разове прибирання офісних приміщень, включаючи прибирання робочих зон, санвузлів, кухонь та загальних просторів. Забезпечуємо чистоту, комфорт і приємну атмосферу для співробітників.',
            self::INDUSTRIAL_ALPINISM => 'Виконання висотних робіт, включаючи миття фасадів, монтажні та обслуговуючі роботи на висоті. Всі роботи виконуються сертифікованими альпіністами з дотриманням техніки безпеки та сучасним обладнанням.',
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::WINDOW_CLEANING => 'building-2',
            self::SOLAR_PANEL_CLEANING => 'sun',
            self::POST_CONSTRUCTION_CLEANING => 'hammer',
            self::INDUSTRIAL_CLEANING => 'factory',
            self::DRY_CLEANING => 'shirt',
            self::OFFICE_CLEANING => 'briefcase',
            self::INDUSTRIAL_ALPINISM => 'mountain',
        };
    }

    public function image(): string
    {
        return match ($this) {
            self::WINDOW_CLEANING => 'https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/project-10.jpg',
            self::SOLAR_PANEL_CLEANING => 'https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/h1-happy-smiling.jpg',
            self::POST_CONSTRUCTION_CLEANING => 'https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/blog-12.jpg',
            self::INDUSTRIAL_CLEANING => 'https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/project-10.jpg',
            self::DRY_CLEANING => 'https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/project-10.jpg',
            self::OFFICE_CLEANING => 'https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/project-10.jpg',
            self::INDUSTRIAL_ALPINISM => 'https://demo2.pavothemes.com/cetro/wp-content/uploads/2025/07/project-10.jpg',
        };
    }

    public function link(): string
    {
        return match ($this) {
            self::WINDOW_CLEANING => 'services.myttia-fasadiv-ta-vikon-na-vysoti',
            self::SOLAR_PANEL_CLEANING => 'services.myika-ta-ochyshchennia-soniachnykh-panelei',
            self::POST_CONSTRUCTION_CLEANING => 'services.pisliabudivelne-prybyrannia',
            self::INDUSTRIAL_CLEANING => 'services.heneralne-prybyrannia-tsekhiv-ta-vyrobnytstva',
            self::DRY_CLEANING => 'services.khimchystka',
            self::OFFICE_CLEANING => 'services.kompleksne-ta-pidtrymuiuche-prybyrannia-ofisu',
            self::INDUSTRIAL_ALPINISM => 'services.promyslovyi-alpinizm',
        };
    }

    public static function isService(?string $route): bool
    {
        return collect(self::cases())->contains(fn ($case) => $case->link() === $route);
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
