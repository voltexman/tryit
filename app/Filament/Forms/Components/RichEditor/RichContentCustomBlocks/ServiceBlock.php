<?php

namespace App\Filament\Forms\Components\RichEditor\RichContentCustomBlocks;

use App\Enums\ServiceEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor\RichContentCustomBlock;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class ServiceBlock extends RichContentCustomBlock
{
    public static function getId(): string
    {
        return 'service';
    }

    public static function getLabel(): string
    {
        return 'Блок послуги';
    }

    public static function configureEditorAction(Action $action): Action
    {
        return $action
            ->modalDescription('Configure the service block')
            ->schema([
                TextInput::make('title')
                    ->label('Заголовок')
                    ->required()
                    ->maxLength(255),

                TextInput::make('subtitle')
                    ->label('Опис')
                    ->required()
                    ->maxLength(255),

                TextInput::make('action_label')
                    ->label('Кнопка послуги')
                    ->placeholder('Детальніше')
                    ->maxLength(255),

                Select::make('service_url')
                    ->label('Послуга для кнопки "Детальніше"')
                    ->options(ServiceEnum::class)
                    ->placeholder('Оберіть послугу')
                    ->native(false),
            ]);
    }

    public static function toPreviewHtml(array $config): string
    {
        $service = $config['service_url'] ?? null;

        if (is_string($service)) {
            $service = ServiceEnum::tryFrom($service);
        }

        $url = $service instanceof ServiceEnum ? route($service->getLink()) : ($config['service_url'] ?? '#');

        return view('filament.forms.components.rich-editor.rich-content-custom-blocks.service.preview', [
            'title' => $config['title'] ?? null,
            'subtitle' => $config['subtitle'] ?? null,
            'actionLabel' => $config['action_label'] ?? 'Детальніше',
            'serviceUrl' => $url,
        ])->render();
    }

    public static function toHtml(array $config, array $data): string
    {
        $service = $config['service_url'] ?? null;

        if (is_string($service)) {
            $service = ServiceEnum::tryFrom($service);
        }

        $url = $service instanceof ServiceEnum ? route($service->getLink()) : ($config['service_url'] ?? '#');

        return view('filament.forms.components.rich-editor.rich-content-custom-blocks.service.index', [
            'title' => $config['title'] ?? null,
            'subtitle' => $config['subtitle'] ?? null,
            'actionLabel' => $config['action_label'] ?? 'Детальніше',
            'serviceUrl' => $url,
        ])->render();
    }
}
