<x-layout>

    <div class="space-y-10 mb-10">
        <section class="text-center pt-10">
            <h3 class="text-4xl">Let's Find You A Great Job</h3>
            <form action="#" class="mt-8">
                <input type="text"
                    class="bg-white/5 w-full max-w-xl py-3 px-5 border border-transparent rounded-lg hover:border-amber-200"
                    placeholder="backend developer...">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>Featured jobs</x-section-heading>

            <div class="grid gap-5  mt-6 md:grid-cols-2  lg:grid-cols-3">
                @foreach ($featuredJobs as $job)
                    <x-job-card :job="$job" />
                @endforeach

            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex gap-2 flex-wrap  mt-6">

                @foreach ($tags as $tag)
                    <x-tag size="large" :name="$tag->name" />
                @endforeach


            </div>

        </section>
        <section>
            <x-section-heading>Recent jobs</x-section-heading>

            <div class="grid gap-5  mt-6 ">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach


            </div>

        </section>
    </div>
</x-layout>
