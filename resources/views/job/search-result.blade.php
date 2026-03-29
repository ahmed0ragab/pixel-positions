<x-layout>
    <h2 class="text-center font-semibold pb-5">Search results</h2>

    @foreach ($jobs as $job)

    <x-job-card-wide :$job/>
    @endforeach
</x-layout>
