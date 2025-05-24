<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6 ">
            <h1 class="text-4xl font-semibold ">Let's Find Your Next Job</h1>
            <form action="/search" method='GET'>
                <input type="text" name="q" placeholder="Web Developer..."
                    class="rounded-xl bg-white/25 border-white/10 px-5 py-4 w-full mt-6 max-w-xl">

            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>
                Featured Jobs
            </x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>

            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach

            </div>
        </section>

        <section>
            <x-section-heading>
                Recents Jobs
            </x-section-heading>
            <div>
                <div class="mt-6 space-y-6">
                    @foreach ($jobs as $job)
                        <x-job-card-wide :job="$job" />
                    @endforeach

                </div>
            </div>

        </section>

    </div>
</x-layout>
