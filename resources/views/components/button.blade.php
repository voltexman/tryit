<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'bg-tryit-orange px-4 py-2.5 text-sm text-white rounded-md font-medium hover:bg-tryit-orange/80 transition-color duration-300 cursor-pointer disabled:opacity-50 disabled:cursor-not-allowed']) }}>
    {{ $slot }}
</button>
