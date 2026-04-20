<?php

namespace App\Filament\Resources\Feedback\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FeedbackForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                TextInput::make('contact'),
                Textarea::make('text')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
