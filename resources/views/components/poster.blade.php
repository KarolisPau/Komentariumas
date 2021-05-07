@props(['title','img','id'])


<div {{ $attributes->merge(['class' => 'm-auto font-medium mb-2 max-w-screen-md shadow-xl rounded-lg']) }}>
    <a href='/plakatas/{{ $id }}'><h3 class="text-lg font-bold">{{ $title }}</h3></a>
    <a href="/plakatas/{{ $id }}"><img src="{{ $img }}" class="w-full h-full rounded-lg"/></a>
    <div class="flex justify-center">
        <a href="/plakatas/{{ $id }}" class="inline-flex bg-green-200 pr-4"><img class='h-6 pl-4 pr-2' src='/images/icons/arrow-up.svg' />39k</a>
        <a href="/plakatas/{{ $id }}" class="inline-flex bg-red-200 pr-4"><img class='h-6 pl-4 pr-2' src='/images/icons/arrow-down.svg' />39k</a>
        <a href="/plakatas/{{ $id }}" class="inline-flex bg-yellow-200 pr-4"><img class='h-6 pl-4 pr-2' src='/images/icons/comment.svg' />39k</a>
    </div>
</div> 

<hr class="mt-5 mb-3">