<?php

namespace App\Filament\Resources\Feedback\Schemas;

use Filament\Infolists\Components\SpatieMediaLibraryImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class FeedbackInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')
                    ->label('Ім`я')
                    ->placeholder('не вказано'),

                TextEntry::make('contact')
                    ->label('Контакти')
                    ->placeholder('не вказано'),

                TextEntry::make('text')
                    ->label('Повідомлення')
                    ->columnSpanFull(),

                SpatieMediaLibraryImageEntry::make('images')
                    ->label('Фото')
                    ->collection('feedback')
                    ->placeholder('без зображень')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->label('Дата звернення')
                    ->dateTime('d F Y'),
            ]);
    }
}
