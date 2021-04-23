@props(['value'])
    <div {{ $attributes->merge(['class' => 'font-medium bg-gray-100 border border-gray-200 mb-2']) }}>
        <img src="{{ $value }}" class="w-full h-full"/>
    </div>