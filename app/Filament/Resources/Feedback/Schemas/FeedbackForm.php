<?php

namespace App\Filament\Resources\Feedback\Schemas;

use App\Enums\FeedbackTopicEnum;
use App\Enums\ServiceEnum;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class FeedbackForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('topic')
                    ->label('Тема звернення')
                    ->native(false)
                    ->options(FeedbackTopicEnum::class)
                    ->selectablePlaceholder(false)
                    ->live()
                    ->required(),

                Select::make('rating')
                    ->label('Оцінка')
                    ->options([
                        1 => '1 зірка',
                        2 => '2 зірки',
                        3 => '3 зірки',
                        4 => '4 зірки',
                        5 => '5 зірок',
                    ])
                    ->native(false)
                    ->visible(fn (Get $get) => $get('topic') === FeedbackTopicEnum::GRATITUDE->value),

                Select::make('service')
                    ->label('Послуга')
                    ->native(false)
                    ->options(ServiceEnum::class)
                    ->nullable(),

                TextInput::make('name')
                    ->label('Ім\'я')
                    ->maxLength(255),

                TextInput::make('contact')
                    ->label('Контакт')
                    ->maxLength(255),

                DatePicker::make('created_at')
                    ->format('d/m/Y')
                    ->columnSpanFull()
                    ->label('Дата публікації'),

                Textarea::make('text')
                    ->label('Текст відгуку')
                    ->required()
                    ->rows(4)
                    ->maxLength(1500)
                    ->maxLength(65535)
                    ->columnSpanFull(),

                Toggle::make('is_visible_on_homepage')
                    ->label('Показувати на головній сторінці')
                    ->columnSpanFull()
                    ->default(false),
            ]);
    }
}
