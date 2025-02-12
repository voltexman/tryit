<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Models\Feedback;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?int $navigationSort = 3;

    protected static ?string $label = 'Зворотній зв`язок';

    protected static ?string $pluralModelLabel = 'Зворотній зв`язок';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Ім`я'),

                TextColumn::make('created_at')
                    ->date()
                    ->icon('heroicon-s-calendar')
                    ->alignEnd()
                    ->width('1%')
                    ->label('Дата'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->modalWidth(MaxWidth::Medium)
                    ->modalHeading('Перегляд повідомлення'),
            ])
            ->bulkActions([
                //
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name')
                    ->columnSpanFull()
                    ->label('Ім`я'),

                TextEntry::make('text')
                    ->columnSpanFull()
                    ->label('Повідомлення')
                    ->default('Замовник не вказав повідомлення'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeedback::route('/'),
        ];
    }
}
