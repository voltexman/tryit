<?php

namespace App\Filament\Resources\Galleries\Pages;

use App\Filament\Resources\Galleries\GalleryResource;
use App\Models\Gallery;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\FileUpload;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Storage;

class ListGalleries extends ListRecords
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('bulk_upload')
                ->label('Масове завантаження')
                ->icon('heroicon-o-arrow-up-tray')
                ->color('success')
                ->form([
                    FileUpload::make('gallery')
                        ->label('Зображення')
                        ->multiple()
                        ->image()
                        ->disk('public')
                        ->panelLayout('grid')
                        ->imageEditor()
                        ->directory('gallery-tmp')
                        ->required(),
                ])
                ->action(function (array $data) {
                    $uploadedCount = 0;

                    foreach ($data['gallery'] as $path) {
                        $gallery = Gallery::create([
                            'is_visible_on_slideshow' => true,
                        ]);

                        $gallery->addMedia(Storage::disk('public')->path($path))
                            ->toMediaCollection('gallery');

                        $uploadedCount++;
                    }

                    Notification::make()
                        ->title("Успішно завантажено {$uploadedCount} зображень")
                        ->success()
                        ->send();
                })
                ->slideOver(),
            CreateAction::make()
                ->label('Додати одне')
                ->slideOver(),
        ];
    }
}
