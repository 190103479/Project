<div class=" font-mono px-12 py-8 bg-white-200 mb-10 border border-gray-300 rounded-lg">
    @if (isset($heading))
        <div class="font-bold text-lg mb-4">{{ $heading }}</div>
    @endif

    {{ $slot }}
</div>