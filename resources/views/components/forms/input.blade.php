@props([
    'variant' => 'filled',
    'size' => 'md',
    'color' => 'slate',
    'label' => null,
    'icon' => null,
])

@php
    $labelText = $label ?? $attributes->get('placeholder');

    // 1. Наявність іконки
    $hasLeftIcon = $icon ? true : false;

    $leftPaddingClasses = [
        'sm' => $hasLeftIcon ? 'pl-9' : 'pl-3',
        'md' => $hasLeftIcon ? 'pl-11' : 'pl-4',
        'lg' => $hasLeftIcon ? 'pl-14' : 'pl-6',
    ];

    $rightPaddingClasses = [
        'sm' => 'pr-3',
        'md' => 'pr-4',
        'lg' => 'pr-6',
    ];

    $verticalPaddingClasses = [
        'sm' => $labelText ? 'pt-5 pb-1' : 'py-2',
        'md' => $labelText ? 'pt-5.5 pb-1.5' : 'py-2.5',
        'lg' => $labelText ? 'pt-6.5 pb-2' : 'py-3.5',
    ];

    // 2. Розміри
    $sizeClasses = [
        'sm' => "{$leftPaddingClasses['sm']} {$rightPaddingClasses['sm']} {$verticalPaddingClasses['sm']} text-sm",
        'md' => "{$leftPaddingClasses['md']} {$rightPaddingClasses['md']} {$verticalPaddingClasses['md']} text-base",
        'lg' => "{$leftPaddingClasses['lg']} {$rightPaddingClasses['lg']} {$verticalPaddingClasses['lg']} text-base",
    ];

    // 3. Кольорові схеми (тільки класи кольорів)
    $colorPalettes = [
        'green' => [
            'filled' => 'bg-emerald-100 border-emerald-100 focus:ring-emerald-500/40 focus:border-emerald-500',
            'outline' => 'focus:border-emerald-500 focus:ring-emerald-500/40',
            'underline' => 'focus:border-emerald-500',
        ],
        'orange' => [
            'filled' => 'bg-orange-100 border-orange-100 focus:ring-orange-500/40 focus:border-orange-500',
            'outline' => 'focus:border-orange-500 focus:ring-orange-500/40',
            'underline' => 'focus:border-orange-500',
        ],
        'slate' => [
            'filled' => 'bg-slate-100 border-slate-200 focus:ring-emerald-500/90 focus:border-slate-300',
            'outline' => 'focus:border-slate-500 focus:ring-slate-500/40',
            'underline' => 'focus:border-slate-500',
        ],
    ];

    // 4. Структурні стилі варіантів (без кольорів)
    $variantStructures = [
        'filled' => 'border focus:bg-white focus:ring-2 focus:ring-offset-2',
        'outline' => 'bg-transparent border-2 border-slate-200 focus:ring-2 focus:ring-offset-2',
        'underline' => 'bg-transparent border-b-2 border-b-slate-200 rounded-none px-1 focus:ring-0',
    ];

    $palette = $colorPalettes[$color] ?? $colorPalettes['slate'];

    $finalClasses = [
        'w-full rounded-full transition-all duration-300 focus:outline-none font-medium text-slate-900 placeholder:text-slate-400 disabled:opacity-50 peer',
        $sizeClasses[$size] ?? $sizeClasses['md'],
        $variantStructures[$variant] ?? $variantStructures['filled'],
        $palette[$variant] ?? $palette['filled'],
    ];

    // Позиціонування крапки (для required)
    $dotClasses = [
        'sm' => 'top-2.5 right-3.5',
        'md' => 'top-3.5 right-4.5',
        'lg' => 'top-4.5 right-6',
    ];
    $dotPosition = $dotClasses[$size] ?? $dotClasses['md'];

    // Класи для плаваючого лейбла
    $labelClasses = [
        'sm' => [
            'idle' => 'top-1/2 -translate-y-1/2 text-sm ' . ($hasLeftIcon ? 'left-9' : 'left-3'),
            'float' =>
                'peer-focus:top-1 peer-focus:text-[10px] peer-focus:translate-y-0 ' . ($hasLeftIcon ? 'peer-focus:left-9' : 'peer-focus:left-3') . ' peer-[:not(:placeholder-shown)]:top-1 peer-[:not(:placeholder-shown)]:text-[10px] peer-[:not(:placeholder-shown)]:translate-y-0 ' . ($hasLeftIcon ? 'peer-[:not(:placeholder-shown)]:left-9' : 'peer-[:not(:placeholder-shown)]:left-3'),
        ],
        'md' => [
            'idle' => 'top-1/2 -translate-y-1/2 text-base ' . ($hasLeftIcon ? 'left-11' : 'left-4'),
            'float' =>
                'peer-focus:top-1 peer-focus:text-[11px] peer-focus:translate-y-0 ' . ($hasLeftIcon ? 'peer-focus:left-11' : 'peer-focus:left-4') . ' peer-[:not(:placeholder-shown)]:top-1 peer-[:not(:placeholder-shown)]:text-[11px] peer-[:not(:placeholder-shown)]:translate-y-0 ' . ($hasLeftIcon ? 'peer-[:not(:placeholder-shown)]:left-11' : 'peer-[:not(:placeholder-shown)]:left-4'),
        ],
        'lg' => [
            'idle' => 'top-1/2 -translate-y-1/2 text-base ' . ($hasLeftIcon ? 'left-14' : 'left-6'),
            'float' =>
                'peer-focus:top-3 peer-focus:text-xs peer-focus:translate-y-0 ' . ($hasLeftIcon ? 'peer-focus:left-14' : 'peer-focus:left-6') . ' peer-[:not(:placeholder-shown)]:top-3 peer-[:not(:placeholder-shown)]:text-xs peer-[:not(:placeholder-shown)]:translate-y-0 ' . ($hasLeftIcon ? 'peer-[:not(:placeholder-shown)]:left-14' : 'peer-[:not(:placeholder-shown)]:left-6'),
        ],
    ];
    $currentLabelClasses = $labelClasses[$size] ?? $labelClasses['md'];

    // Позиціонування та розмір іконки
    $iconPositions = [
        'sm' => 'left-3 top-1/2 -translate-y-1/2',
        'md' => 'left-4 top-1/2 -translate-y-1/2',
        'lg' => 'left-6 top-1/2 -translate-y-1/2',
    ];
    $iconPositionClasses = $iconPositions[$size] ?? $iconPositions['md'];

    $iconSizes = [
        'sm' => 'size-4',
        'md' => 'size-5',
        'lg' => 'size-5',
    ];
    $iconSizeClasses = $iconSizes[$size] ?? $iconSizes['md'];

    $inputAttributes = $attributes->except(['placeholder'])->merge(['placeholder' => ' ']);
@endphp

<div class="relative w-full flex items-center">
    <input {{ $inputAttributes->class($finalClasses)->merge(['type' => 'text']) }}>

    @if ($icon)
        <div
            class="absolute {{ $iconPositionClasses }} text-slate-400 pointer-events-none transition-colors duration-300 peer-focus:text-tryit-orange/90">
            <x-dynamic-component :component="'lucide-' . $icon" class="{{ $iconSizeClasses }}" />
        </div>
    @endif

    @if ($labelText)
        <label
            class="absolute {{ $currentLabelClasses['idle'] }} {{ $currentLabelClasses['float'] }} text-slate-400 font-medium transition-all duration-300 pointer-events-none origin-left peer-focus:text-tryit-orange/90">
            {{ $labelText }}
        </label>
    @endif

    @if ($attributes->has('required') && $attributes->get('required') !== false)
        <span class="absolute {{ $dotPosition }} flex h-1.5 w-1.5 pointer-events-none">
            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-red-500"></span>
        </span>
    @endif
</div>
