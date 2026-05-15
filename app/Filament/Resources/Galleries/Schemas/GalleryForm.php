<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(1)->schema([
                    SpatieMediaLibraryFileUpload::make('gallery')
                        ->collection('gallery')
                        ->label('Зображення')
                        ->image()
                        ->required(),

                    TextInput::make('title')
                        ->label('Заголовок (Title)')
                        ->maxLength(255),

                    Textarea::make('description')
                        ->label('Опис (Description)')
                        ->rows(3),

                    TextInput::make('alt')
                        ->label('Alt текст (SEO)')
                        ->maxLength(255),

                    TextInput::make('meta_title')
                        ->label('Title атрибут (SEO)')
                        ->maxLength(255),

                    TextInput::make('sort_order')
                        ->label('Порядок сортування')
                        ->numeric()
                        ->default(0),

                    Toggle::make('is_visible_on_slideshow')
                        ->label('Відображати на слайдшоу')
                        ->default(true),
                ])->columnSpanFull(),
            ]);
    }
}
