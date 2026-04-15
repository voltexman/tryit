<?php

namespace App\Filament\Resources\Feedback\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
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

                TextColumn::make('company')
                    ->label('Компанія')
                    ->placeholder('Не вказано')
                    ->searchable(),

                ToggleColumn::make('show')
                    ->label(''),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
