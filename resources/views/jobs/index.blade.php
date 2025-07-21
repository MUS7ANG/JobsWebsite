@props(['job'])

<x-layout>
    <div class="space-y-10">

        <section class="text-center">
            <h1 class="font-bold text-4xl">Find your job!</h1>

            <x-form.form action="/search" class="mt-6">
                <x-form.input :label="false" name="q" placeholder="Web Developer..." />
            </x-form.form>

        </section>
        <section>
            <x-heading>Top Jobs</x-heading>
            <div class="grid lg:grid-cols-3 gap-8">

                @foreach($jobs as $job)
                    <x-card :job="$job" />
                @endforeach


            </div>

        </section>

        <section>
            <x-heading>Tags</x-heading>

            <div class="flex mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach

            </div>
        </section>

        <section>
            <x-heading>Recents Jobs</x-heading>
            <div class="space-y-5">
                @foreach($featured_jobs as $job)
                    <x-wide-job-card :job="$job" />
                @endforeach

            </div>

        </section>
    </div>
</x-layout>
