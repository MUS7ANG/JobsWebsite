@props(['job'])

@php
    $tags = $job->tags;
@endphp

<div class="bg-white/5 p-4 flex rounded-xl flex-col text-center border border-transparent hover:border-blue-600 group">
    <div class="self-start text-sm">
        <p>{{ $job->employer->name }}</p>
    </div>

    <div class="py-8">
        <h2 class="font-bold group-hover:text-blue-600">{{ $job->title }}</h2>
        <p>${{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="flex space-x-1">
            @foreach($tags as $tag)
                <x-tag :tag="$tag" />
            @endforeach

        </div>

        <x-employer-logo :width="42"/>
    </div>

</div>
