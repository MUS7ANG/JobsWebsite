@props(['job'])

@php
    $tags = $job->tags;
@endphp

<div>
    <div class="bg-white/5 p-4 flex rounded-xl gap-x-6 border border-transparent hover:border-blue-600 group">

        <div>
            <x-employer-logo :width="100"/>
        </div>

        <div class="flex-1">

            <div class="py-4">
                <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>
                <h2 class="font-bold text-lg group-hover:text-blue-600">{{ $job->title }}</h2>
                <p class="text-sm accent-gray-400">${{ $job->salary}}</p>
            </div>
        </div>

        <div class="flex justify-between items-center mt-auto">
            <div class="flex space-x-1">
                @foreach($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach

            </div>
        </div>

    </div>
</div>

