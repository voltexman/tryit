<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Filament\Forms\Components\RichEditor\RichContentCustomBlocks\ServiceBlock;
use App\Models\Post;
use Filament\Actions\Action;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
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
                Grid::make(3)->schema([
                    Grid::make(1)->schema([
                        Section::make('Основна інформація')->schema([
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
                                ->dehydrated()
                                ->suffixAction(
                                    Action::make('toggleSlugLock')
                                        ->icon(fn (Get $get): string => ($get('slug_locked') ?? true) ? 'heroicon-m-lock-closed' : 'heroicon-m-lock-open')
                                        ->tooltip(fn (Get $get): string => ($get('slug_locked') ?? true) ? 'Розблокувати' : 'Заблокувати')
                                        ->action(function (Get $get, Set $set): void {
                                            $currentState = (bool) ($get('slug_locked') ?? true);
                                            $set('slug_locked', ! $currentState);
                                        })
                                ),

                            Select::make('tags')
                                ->label('Теги')
                                ->multiple()
                                ->relationship('tags', 'name')
                                ->preload()
                                ->createOptionForm([
                                    TextInput::make('name')
                                        ->label('Назва')
                                        ->required()
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug((string) $state))),
                                    TextInput::make('slug')
                                        ->label('Slug')
                                        ->required()
                                        ->unique('tags', 'slug'),
                                ])->columnSpanFull(),

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
                                    'customBlocks',
                                ])
                                ->customBlocks([
                                    ServiceBlock::class,
                                ])
                                ->columnSpanFull(),
                        ])->columns(2),

                        Section::make('SEO Налаштування')->schema([
                            TextInput::make('meta_title')
                                ->label('Meta title')
                                ->maxLength(255),

                            Textarea::make('meta_description')
                                ->label('Meta description (180 символів)')
                                ->rows(3)
                                ->helperText('Опис для відображення в результатах пошуку. Рекомендована довжина в межах 180 символів.')
                                ->maxLength(180),

                            Select::make('meta_robots')
                                ->label('Meta robots')
                                ->options([
                                    'index, follow' => 'Індексувати, Слідувати',
                                    'index, nofollow' => 'Індексувати, Не слідувати',
                                    'noindex, nofollow' => 'Не індексувати, Не слідувати',
                                ])
                                ->selectablePlaceholder(false)
                                ->native(false),
                        ]),
                    ])->columnSpan(2),

                    Grid::make(1)->schema([
                        Section::make('Медіа')->schema([
                            SpatieMediaLibraryFileUpload::make('image')
                                ->label(false)
                                ->disk('public')
                                ->hiddenLabel(true)
                                ->conversion('preview')
                                ->collection(Post::COLLECTION_COVER)
                                ->image()
                                ->imageEditor(),
                        ]),

                        Section::make('Публікація')->schema([
                            DateTimePicker::make('published_at')
                                ->label('Дата публікації')
                                ->default(now())
                                ->native(false),

                            Toggle::make('is_published')
                                ->label('Опубліковано')
                                ->default(true),
                        ]),
                    ])->columnSpan(1),
                ])->columnSpanFull(),
            ]);
    }
}
