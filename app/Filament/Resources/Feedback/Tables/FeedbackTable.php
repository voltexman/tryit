<?php

namespace App\Filament\Resources\Feedback\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FeedbackTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Ім\'я')
                    ->placeholder('Не вказано')
                    ->searchable(),

                TextColumn::make('contact')
                    ->label('Контакт')
                    ->placeholder('Не вказано')
                    ->searchable(),

                TextColumn::make('topic')
                    ->label('Тема')
                    ->badge(),

                TextColumn::make('rating')
                    ->label('Оцінка')
                    ->formatStateUsing(fn ($state) => str_repeat('⭐', $state))
                    ->placeholder('-'),

                TextColumn::make('service')
                    ->label('Послуга')
                    ->placeholder('Не вказано')
                    ->badge(),

                IconColumn::make('is_visible_on_homepage')
                    ->label('На головній')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Дата створення')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()->slideOver()->modalWidth('lg'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
