@props(['tag'])

@php
    $name = $tag->name;
@endphp

<div class="bg-white/10 px-3 py-1 text-xs rounded-2xl hover:bg-white/30">
    <a href="/tags/{{ strtolower($name) }}">{{ $name }}</a>
</div>
