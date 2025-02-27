<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->prefix('TryIt - ')
                    ->helperText(new HtmlString('Meta тег <strong>title</strong>.'))
                    ->label('Заголовок сторінки'),

                Select::make('robots')->options([
                    'index, follow' => '1',
                    'noindex, nofollow' => '2',
                    'index, nofollow' => '3',
                    'noindex, follow' => '4',
                ])
                    ->helperText(new HtmlString('Your <strong>full name</strong> here, including any middle names.'))
                    ->native(false)->label('Доступність'),

                Textarea::make('description')
                    ->helperText(new HtmlString('Короткий опис змісту сторінки <strong>(до 160 символів)</strong>. Впливає на клікабельність сторінки у пошуку.'))
                    ->columnSpanFull()->rows(4)->autosize()->label('Опис сторінки'),

                RichEditor::make('content')->columnSpanFull()->label('Матеріал сторінки')
                    ->visible(fn (Page $record) => $record->name === 'privacy-policy'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('label')->label('Назва сторінки'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //
            ])->paginated(false);
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
            'index' => Pages\ListPages::route('/'),
            // 'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
