@props([
    'job'
])

 <div class="p-4 bg-white/5 flex flex-col border border-transparent rounded-xl text-center hover:border-amber-200 hover:border  transition-colors duration-300 group">

     <div class="self-start text-sm">{{ $job->employer->name }}</div>
     <div class="py-8  ">
        <a href="{{ $job->url }}">

            <h3 class="font-bold text-2xl group-hover:text-amber-200 transition-colors duration-300">{{ $job->title }}</h3>
        </a>
         <p class="text-sm mt-4">{{ $job->time_of_work }} from {{ $job->salary }} $</p>
     </div>
     <div class="flex justify-between items-center mt-auto">
         <div class="flex flex-wrap gap-2">
            @foreach ($job->tags as $tag)
            <x-tag :name="$tag->name"/>
            @endforeach
         </div>
         <x-employer-logo/>
     </div>

 </div>
