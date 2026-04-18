<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Actions\Action;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Основна інформація')
                    ->schema([
                        Hidden::make('slug_locked')
                            ->default(true)
                            ->dehydrated(false),

                        TextInput::make('title')
                            ->label('Заголовок')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (?string $state, Get $get, Set $set): void {
                                if ($get('slug_locked')) {
                                    $set('slug', Str::slug((string) $state));
                                }
                            }),

                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255)
                            ->disabled(fn (Get $get): bool => (bool) ($get('slug_locked') ?? true))
                            ->readOnly(fn (Get $get): bool => (bool) ($get('slug_locked') ?? true))
                            ->suffixAction(
                                Action::make('toggleSlugLock')
                                    ->icon(fn (Get $get): string => ($get('slug_locked') ?? true) ? 'heroicon-m-lock-closed' : 'heroicon-m-lock-open')
                                    ->tooltip(fn (Get $get): string => ($get('slug_locked') ?? true) ? 'Розблокувати' : 'Заблокувати')
                                    ->action(function (Get $get, Set $set): void {
                                        $currentState = (bool) ($get('slug_locked') ?? true);
                                        $set('slug_locked', ! $currentState);
                                    })
                            )
                            ->helperText('Використовується в URL статті'),

                        RichEditor::make('body')
                            ->label('Текст статті')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'bulletList',
                                'orderedList',
                                'h2',
                                'h3',
                                'blockquote',
                                'link',
                                'undo',
                                'redo',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->columnSpanFull(),

                Section::make('Публікація та обкладинка')
                    ->schema([
                        FileUpload::make('cover_image')
                            ->label('Обкладинка')
                            ->image()
                            ->directory('posts')
                            ->imageEditor()
                            ->imagePreviewHeight('180')
                            ->maxSize(4096)
                            ->columnSpanFull(),

                        Toggle::make('is_published')
                            ->label('Опублікувати')
                            ->default(false)
                            ->live(),

                        DateTimePicker::make('published_at')
                            ->label('Дата публікації')
                            ->seconds(false)
                            ->native(false)
                            ->visible(fn ($get): bool => (bool) $get('is_published'))
                            ->required(fn ($get): bool => (bool) $get('is_published')),
                    ])
                    ->columns(2),
            ]);
    }
}
