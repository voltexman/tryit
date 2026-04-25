<div class="w-full">
    <div class="flex justify-between mb-1">
        <span class="text-base font-medium text-emerald-700">{{ $label }}</span>
        <span class="text-sm font-bold text-emerald-900">{{ $percentage }}%</span>
    </div>
    <div class="w-full bg-gray-200 rounded-full h-3.5 dark:bg-gray-700">
        <div class="bg-emerald-500 h-3.5 rounded-full" style="width: {{ $percentage }}%"></div>
    </div>
</div>
