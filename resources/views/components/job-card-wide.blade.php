 <div class="p-4 bg-white/5 flex  rounded-xl text-center border border-transparent hover:border-amber-200 hover:border  transition-colors duration-300  group">
    {{-- left div --}}
     <div>
         <a href="#">
            <x-employer-logo :width="90"/>
         </a>
     </div>

     {{-- middle div --}}
     <div class="flex-1 flex flex-col items-start pl-2 justify-between">
         <div>
             <p class="text-gray-400 text-xs">GovExec</p>
         </div>
         <div class="font-bold mt-3 group-hover:text-amber-200 transition-colors duration-300">
             <h3>video producer<h3>

         </div>
         <div class="mt-auto text-xs text-gray-400">
             <p>full time from $60000</p>

         </div>
     </div>
     {{-- right div --}}
     <div class="flex flex-col justify-between">
         <div>
             <x-tag>utag</x-tag>
             <x-tag>utag</x-tag>
         </div>
         <div>
             <x-tag>ltag</x-tag>
             <x-tag>ltag</x-tag>
             <x-tag>ltag</x-tag>
         </div>
     </div>

 </div>


