<?php

namespace App\Filament\Resources\Orders\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OrdersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('№')
                    ->weight('bold')
                    ->color('primary')
                    ->size('lg')
                    ->searchable(),

                TextColumn::make('name')
                    ->label('Замовник')
                    ->placeholder('не вказано')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('contact')
                    ->label('Контактні дані')
                    ->placeholder('не вказано')
                    ->copyable(),

                TextColumn::make('address')
                    ->label('Адреса об`єкту')
                    ->placeholder('не вказано')
                    ->searchable(),

                TextColumn::make('status')
                    ->badge()
                    ->sortable()
                    ->label('Статус'),

                TextColumn::make('created_at')
                    ->sortable()
                    ->label('Дата')
                    ->icon(Heroicon::CalendarDays)
                    ->date(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make()->label(false)->icon(Heroicon::Eye),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
