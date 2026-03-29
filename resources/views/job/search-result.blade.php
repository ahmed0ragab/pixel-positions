<x-layout>
    <h2 class="text-center font-semibold pb-5">Search results</h2>

    @foreach ($jobs as $job)
    <div class="mb-5">

    <x-job-card-wide :$job/>
</div>
    @endforeach
</x-layout>
