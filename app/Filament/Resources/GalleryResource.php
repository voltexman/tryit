<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Models\Gallery;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?int $navigationSort = 3;

    protected static ?string $label = 'Галерея';

    protected static ?string $pluralModelLabel = 'Галерея';

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                SpatieMediaLibraryFileUpload::make('image')
                    ->collection('gallery')
                    ->required()
                    ->label(false),

                TextInput::make('name')
                    ->helperText(new HtmlString('Your <strong>full name</strong> here, including any middle names.'))
                    ->placeholder('Назва або підпис')
                    ->label(false),

                Textarea::make('description')
                    ->helperText(new HtmlString('Your <strong>full name</strong> here, including any middle names.'))
                    ->placeholder('Додатковий опис')
                    ->rows(4)
                    ->autosize()
                    ->label(false),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')->collection('gallery')->width(60)->height(50),

                TextColumn::make('name')
                    ->default('Підпис відсутній')
                    ->lineClamp(1)
                    ->label('Підпис'),

                TextColumn::make('description')
                    ->default('Опис відсутній')
                    ->lineClamp(2)
                    ->wrap()
                    ->label('Опис'),
            ])
            ->reorderable('sort')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListGalleries::route('/'),
            // 'create' => Pages\CreateGallery::route('/create'),
        ];
    }
}
