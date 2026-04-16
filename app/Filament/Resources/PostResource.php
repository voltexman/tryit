<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?int $navigationSort = 5;

    protected static ?string $label = 'Стаття';

    protected static ?string $pluralLabel = 'Блог';

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Основне')->schema([
                    TextInput::make('title')
                        ->label('Заголовок')
                        ->required()
                        ->maxLength(255)
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                    TextInput::make('slug')
                        ->label('URL-слаг')
                        ->required()
                        ->unique(ignoreRecord: true)
                        ->maxLength(255),

                    TextInput::make('cover_image')
                        ->label('URL обкладинки')
                        ->url()
                        ->maxLength(500),

                    Textarea::make('excerpt')
                        ->label('Короткий опис')
                        ->rows(3)
                        ->maxLength(500),

                    RichEditor::make('body')
                        ->label('Текст статті')
                        ->required()
                        ->columnSpanFull(),
                ])->columns(2),

                Section::make('Публікація')->schema([
                    Toggle::make('is_published')
                        ->label('Опубліковано'),

                    DateTimePicker::make('published_at')
                        ->label('Дата публікації'),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover_image')
                    ->label('')
                    ->circular()
                    ->width(40)
                    ->height(40),

                TextColumn::make('title')
                    ->searchable()
                    ->limit(50)
                    ->label('Заголовок'),

                TextColumn::make('published_at')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->label('Дата'),

                IconColumn::make('is_published')
                    ->boolean()
                    ->label('Опубліковано'),
            ])
            ->defaultSort('published_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
