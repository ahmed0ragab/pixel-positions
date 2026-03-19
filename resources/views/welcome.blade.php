<x-layout>

    <div class="space-y-10 mb-10">
        <section >
        <x-section-heading>Featured jobs</x-section-heading>

        <div class="grid gap-5  mt-6 md:grid-cols-2  lg:grid-cols-3">
            <x-job-card />
            <x-job-card />
            <x-job-card />
        </div>
    </section>

    <section>
        <x-section-heading>Tags</x-section-heading>
        <div class="flex space-x-2 flex-wrap space-y-2 mt-6">
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
            <x-tag>tag</x-tag>
        </div>

    </section>
    <section>
        <x-section-heading>Recent jobs</x-section-heading>

        <x-job-card></x-job-card>

    </section>
    </div>
</x-layout>
