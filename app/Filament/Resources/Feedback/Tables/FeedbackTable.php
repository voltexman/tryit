<?php

namespace App\Filament\Resources\Feedback\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FeedbackTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('images')
                    ->collection('feedback')
                    ->circular()
                    ->stacked()
                    ->limit(3)
                    ->label('Фото'),

                TextColumn::make('name')
                    ->label('Ім`я')
                    ->placeholder('не вказано')
                    ->searchable(),

                TextColumn::make('contact')
                    ->label('Контакти')
                    ->placeholder('не вказано')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Дата')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
