<?php

namespace App\Filament\Resources\Orders\Schemas;

use App\Enums\OrderStatus;
use App\Enums\ServiceEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(3)->schema([
                    Section::make('Інформація про замовника')
                        ->columnSpan(2)
                        ->schema([
                            TextInput::make('name')
                                ->label("Ім'я")
                                ->required()
                                ->maxLength(255),

                            TextInput::make('contact')
                                ->label('Контакт')
                                ->required()
                                ->maxLength(255),

                            TextInput::make('address')
                                ->label('Адреса об\'єкта')
                                ->maxLength(255),

                            Textarea::make('text')
                                ->label('Коментар клієнта')
                                ->rows(4)
                                ->columnSpanFull(),
                        ]),

                    Section::make('Деталі замовлення')
                        ->columnSpan(1)
                        ->schema([
                            Select::make('status')
                                ->label('Статус')
                                ->native(false)
                                ->options(OrderStatus::class)
                                ->required(),

                            Select::make('service')
                                ->label('Послуга')
                                ->native(false)
                                ->options(ServiceEnum::class)
                                ->live()
                                ->required(),

                            TextInput::make('options.custom_service')
                                ->label('Назва власної послуги')
                                ->visible(fn (Get $get) => $get('service') === ServiceEnum::CUSTOM->value)
                                ->required(),

                            TextInput::make('square_area')
                                ->label('Площа (м²)')
                                ->numeric(),

                            Select::make('contamination_level')
                                ->label('Рівень забруднення')
                                ->options([
                                    1 => '✨ Мінімальне (Пилок)',
                                    2 => '🧹 Легке (Дрібне)',
                                    3 => '🧼 Середнє (Звичайне)',
                                    4 => '💪 Важке (Забруднено)',
                                    5 => '🔥 Критичне (Ремонт)',
                                ])
                                ->native(false),

                            Toggle::make('is_urgent')
                                ->label('Термінове прибирання')
                                ->inline(false),

                            Toggle::make('has_elevator')
                                ->label('Є ліфт'),

                            Toggle::make('has_water')
                                ->label('Є вода'),

                            Toggle::make('has_parking')
                                ->label('Є паркування'),
                        ]),
                ]),

                Section::make('Адміністрування')
                    ->columnSpanFull()
                    ->schema([
                        Textarea::make('comment')
                            ->label('Внутрішній коментар')
                            ->rows(3),
                    ]),
            ]);
    }
}
