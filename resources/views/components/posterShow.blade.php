@props(['title','img','id'])


<div {{ $attributes->merge(['class' => 'm-auto font-medium mb-2 max-w-screen-md shadow-xl']) }}>
    <a href='/plakatas/{{ $id }}'><h3 class="text-lg font-bold">{{ $title }}</h3></a>
    <a href="/plakatas/{{ $id }}"><img src="{{ $img }}" class="w-full h-full rounded-l"/></a>      
</div> 
<span class="inline-flex bg-green-200 pr-4 w-1/4"><img class='h-10 pl-4 pr-2' src='/images/icons/arrow-up.svg' />39k</span>
<span  class="inline-flex bg-red-200 pr-4 w-1/4" ><img class='h-10 pl-4 pr-2' src='/images/icons/arrow-down.svg' />39k</span>
<span  class="inline-flex bg-yellow-200 pr-4 w-1/4"><img class='h-10 pl-4 pr-2' src='/images/icons/comment.svg' />39k</span>


<hr class="mt-5 mb-3">