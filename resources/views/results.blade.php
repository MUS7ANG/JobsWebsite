<x-layout>
    <x-heading>Results</x-heading>

    <div class="space-y-6">
        @foreach($jobs as $job)
            <x-wide-job-card :$job />
        @endforeach
    </div>
</x-layout>
