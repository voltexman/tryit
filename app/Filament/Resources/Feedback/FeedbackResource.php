<?php

namespace App\Filament\Resources\Feedback;

use App\Filament\Resources\Feedback\Pages\ListFeedback;
use App\Filament\Resources\Feedback\Schemas\FeedbackInfolist;
use App\Filament\Resources\Feedback\Tables\FeedbackTable;
use App\Models\Feedback;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $modelLabel = 'Звернення';

    protected static ?string $pluralModelLabel = 'Звернення';

    protected static ?int $navigationSort = 2;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function table(Table $table): Table
    {
        return FeedbackTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FeedbackInfolist::configure($schema);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFeedback::route('/'),
        ];
    }
}
