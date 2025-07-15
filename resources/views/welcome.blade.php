<x-layout>
    <div class="space-y-10">

        <section class="text-center">
            <h1 class="font-bold text-4xl">Find your job!</h1>
            <form class="mt-6" action="" method="">
                <input type="text" placeholder="Web Developer..." class="rounded-xl bg-white/5 border border-white/10 px-5 py-4 w-full max-w-xl">
            </form>

        </section>
        <section>
            <x-heading>Top Jobs</x-heading>
            <div class="grid lg:grid-cols-3 gap-8">
                <x-card />
                <x-card />
                <x-card />
            </div>

        </section>

        <section>
            <x-heading>Tags</x-heading>

            <div class="flex mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-heading>Recents Jobs</x-heading>
            <div class="space-y-5">
                <x-wide-job-card />
                <x-wide-job-card />
                <x-wide-job-card />
            </div>

        </section>
    </div>
</x-layout>
