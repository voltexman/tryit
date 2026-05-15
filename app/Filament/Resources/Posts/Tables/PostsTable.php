<?php

namespace App\Filament\Resources\Posts\Tables;

use App\Models\Post;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('image')
                    ->label('Обкладинка')
                    ->disk('public')
                    ->conversion('preview')
                    ->circular()
                    ->collection(Post::COLLECTION_COVER),

                TextColumn::make('title')
                    ->label('Заголовок та Теги')
                    ->searchable()
                    ->sortable()
                    ->weight(FontWeight::Bold)
                    ->description(fn (Post $record) => new HtmlString(
                        Blade::render('
                            @if($tags->isNotEmpty())
                                <div class="flex flex-wrap gap-1 mt-1">
                                    @foreach($tags as $tag)
                                        <x-filament::badge color="primary">{{ $tag->name }}</x-filament::badge>
                                    @endforeach
                                </div>
                            @endif
                        ', ['tags' => $record->tags])
                    )),

                ToggleColumn::make('is_published')
                    ->label('Опубліковано')
                    ->sortable(),

                TextColumn::make('published_at')
                    ->label('Дата публікації')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('created_at')
                    ->label('Створено')
                    ->dateTime('d.m.Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
