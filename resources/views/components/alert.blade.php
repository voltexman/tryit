@props(['type' => 'info'])

<div {{ $attributes->class('bg-blue-50 rounded-2xl p-5 text-xs text-blue-950 leading-4') }}>{{ $slot }}</div>
