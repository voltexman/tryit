<?php

namespace App\Filament\Resources;

use App\Enums\OrderStatus;
use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Support\Enums\MaxWidth;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $label = 'Замовлення';

    protected static ?string $pluralModelLabel = 'Замовлення';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // TextEntry::make('service')
                //     ->label('Послуга'),

                // TextEntry::make('status')->badge()
                //     ->label('Статус'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable()
                    ->width('1%')
                    ->label('Номер заявки'),

                TextColumn::make('service')
                    ->searchable()
                    ->label('Послуга'),

                TextColumn::make('status')
                    ->badge()
                    ->sortable()
                    ->alignEnd()
                    ->searchable()
                    ->label('Статус'),

                TextColumn::make('created_at')
                    ->date()
                    ->icon('heroicon-s-calendar')
                    ->searchable()
                    ->alignEnd()
                    ->width('1%')
                    ->label('Дата замовлення'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()
                    ->modalHeading('Перегляд замовлення'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->defaultSort('status');
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('service')
                    ->label('Послуга'),

                TextEntry::make('status')->badge()
                    ->label('Статус'),

                TextEntry::make('name')
                    ->label('Замовник'),

                TextEntry::make('contact')
                    ->copyable()
                    ->copyMessage('Скопійовано')
                    ->label('Контактні дані'),

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
            'index' => Pages\ListOrders::route('/'),
        ];
    }
}
