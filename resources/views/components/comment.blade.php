@props(['comment', "name"])

<div {{ $attributes->merge(['class' => 'block m-auto font-medium mb-2 max-w-screen-md shadow-xl bg-white']) }}>
    <h3 class="float-left m-2 font-bold">{{ $name }}<h3><br>
    <h4 class="justify-between m-1">{{ $comment }}</h4>
</div> 
