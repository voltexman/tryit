<?php

namespace App\Filament\Forms\Components\RichEditor\RichContentCustomBlocks;

use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor\RichContentCustomBlock;
use Filament\Forms\Components\TextInput;

class ServiceBlock extends RichContentCustomBlock
{
    public static function getId(): string
    {
        return 'service';
    }

    public static function getLabel(): string
    {
        return 'Service';
    }

    public static function configureEditorAction(Action $action): Action
    {
        return $action
            ->modalDescription('Configure the service block')
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('subtitle')
                    ->label('Subtitle')
                    ->maxLength(255),

                TextInput::make('service_url')
                    ->label('Service URL')
                    ->maxLength(255),
            ]);
    }

    public static function toPreviewHtml(array $config): string
    {
        return view('filament.forms.components.rich-editor.rich-content-custom-blocks.service.preview', [
            'title' => $config['title'] ?? null,
            'subtitle' => $config['subtitle'] ?? null,
            'actionLabel' => $config['action_label'] ?? 'Детальніше',
            'serviceUrl' => $config['service_url'] ?? '#',
        ])->render();
    }

    public static function toHtml(array $config, array $data): string
    {
        return view('filament.forms.components.rich-editor.rich-content-custom-blocks.service.index', [
            'title' => $config['title'] ?? null,
            'subtitle' => $config['subtitle'] ?? null,
            'actionLabel' => $config['action_label'] ?? 'Детальніше',
            'serviceUrl' => $config['service_url'] ?? '#',
        ])->render();
    }
}
