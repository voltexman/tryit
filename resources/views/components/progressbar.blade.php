@props(['percentage' => 0, 'label' => ''])

<div>
    <div class="relative flex items-center justify-between mb-2">
        <div class="text-sm lg:text-base font-medium text-tryit-dark">
            {{ $label }}
        </div>

        <div class="absolute text-lg font-bold font-[Oswald] text-tryit-green"
            style="{{ $percentage < 100 ? 'left: calc(' . $percentage . '% - 1.5rem);' : 'right: 0;' }}">
            {{ $percentage }}%
        </div>
    </div>

    <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden" role="progressbar"
        aria-valuenow="{{ $percentage }}" aria-valuemin="0" aria-valuemax="100">
        <div class="flex flex-col justify-center rounded-full bg-tryit-dark text-xs text-white text-center whitespace-nowrap transition-all duration-500"
            style="width: {{ $percentage }}%;"></div>
    </div>
</div>
