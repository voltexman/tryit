<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('posts')
                    ->image()
                    ->maxSize(1024)
                    ->columnSpanFull()
                    ->label('Зображення'),

                TextInput::make('title')
                    ->label('Назва')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->prefix('/')
                    ->label('Посилання')
                    ->required()
                    ->maxLength(255),

                TagsInput::make('tags')
                    ->label('Теги')
                    ->separator(',')
                    ->placeholder('Додати тег'),

                RichEditor::make('content')
                    ->columnSpanFull()
                    ->label('Контент'),

                Toggle::make('is_published')
                    ->label('Опубліковано')
                    ->default(false),
            ]);
    }
}
