@props(['type' => 'text'])

<div {{ $attributes->class([
    'bg-gradient-to-br from-tryit-orange/5 to-tryit-orange/10 border border-tryit-orange/25 border-dashed text-tryit-orange font-medium text-sm' =>
        $type === 'text',
    'rounded-lg p-4',
]) }}
    role="alert">
    <div class="flex">
        <div class="shrink-0">icon</div>
        <div class="ms-3">
            @if ($type === 'text')
                <div>{{ $slot }}</div>
            @else
                <h3 id="hs-actions-label" class="font-semibold">
                    YouTube would like you to send notifications
                </h3>
                <div class="mt-2 text-sm text-gray-600">
                    Notifications may include alerts, sounds and icon badges. These can be configured in Settings.
                </div>
                <div class="mt-4">
                    <div class="flex gap-x-3"></div>
                </div>
            @endif
        </div>
    </div>
</div>
