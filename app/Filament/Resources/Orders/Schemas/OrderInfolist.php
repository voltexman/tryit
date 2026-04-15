<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Filament\Support\Enums\FontWeight;

class OrderInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->weight(FontWeight::Bold)
                    ->color('primary')
                    ->size('lg')
                    ->label('Order ID'),

                TextEntry::make('name')
                    ->placeholder('не вказано')
                    ->label('Замовник'),

                TextEntry::make('contact')
                    ->placeholder('не вказано')
                    ->label('Контактні дані'),

                TextEntry::make('address')
                    ->placeholder('не вказано')
                    ->label('Адреса об`єкту'),

                TextEntry::make('created_at')
                    ->label('Дата замовлення')
                    ->dateTime(),
            ]);
    }
}
