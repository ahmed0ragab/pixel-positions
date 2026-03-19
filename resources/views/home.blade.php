<x-layout>

    <div class="space-y-10 mb-10">
        <section>
            <x-section-heading>Featured jobs</x-section-heading>

            <div class="grid gap-5  mt-6 md:grid-cols-2  lg:grid-cols-3">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="flex gap-2 flex-wrap  mt-6">
                
                @for ( $i=0; $i<20; $i++)
                <x-tag size="large"> tag</x-tag>
                @endfor

            </div>

        </section>
        <section>
            <x-section-heading>Recent jobs</x-section-heading>

            <div class="grid gap-5  mt-6 ">
            <x-job-card-wide></x-job-card-wide>
            <x-job-card-wide></x-job-card-wide>
            <x-job-card-wide></x-job-card-wide>
            <x-job-card-wide></x-job-card-wide>
            <x-job-card-wide></x-job-card-wide>

            </div>

        </section>
    </div>
</x-layout>
