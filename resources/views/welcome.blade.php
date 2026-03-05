<x-layout>
    {{-- card
    <section>
        <div class="font-bold text-md">
            <h3><span class="w-3 h-3 bg-white inline-block mr-1 "></span> Post a Job</h3>
        </div>
        <div class="flex flex-col-3 space-x-5  w-auto items-center justify-center ">
            <div class="bg-amber-400 rounded-lg px-3 flex flex-col space-y-5">
                <div>
                    GovExec
                </div>
                <div>
                    <h3>
                        Full stack Laravel <span>Developer</span>
                    </h3>
                </div>

                <div>Full Time - From $60.000</div>
                <div>
                    <div>
                        <button>frontend</button>
                        <button>Backend</button>
                        <button>Api</button>
                    </div>
                    <img src="" alt="">
                </div>
            </div>
            <div class="bg-amber-400">
                <div class="font-bold text-md">
                    <h3><span class="w-3 h-3 bg-white inline-block mr-1 "></span> Post a Job</h3>
                </div>
                <div>
                    <h3>
                        Full stack Laravel <span>Developer</span>
                    </h3>
                </div>

                <div>Full Time - From $60.000</div>
                <div>
                    <div>
                        <button>frontend</button>
                        <button>Backend</button>
                        <button>Api</button>
                    </div>
                    <img src="" alt="">
                </div>
            </div>
            <div class="bg-amber-400">
                <div class="font-bold text-md">
                    <h3><span class="w-3 h-3 bg-white inline-block mr-1 "></span> Post a Job</h3>
                </div>
                <div>
                    <h3>
                        Full stack Laravel <span>Developer</span>
                    </h3>
                </div>

                <div>Full Time - From $60.000</div>
                <div>
                    <div>
                        <button>frontend</button>
                        <button>Backend</button>
                        <button>Api</button>
                    </div>
                    <img src="" alt="">
                </div>
            </div>
        </div>
    </section> --}}

    <div class=" text-white min-h-screen font-sans">


        <!-- Hero Section -->
        <section class="text-center mt-16">
            <h1 class="text-4xl font-bold mb-8">
                Let's Find You A Great Job
            </h1>

            <div class="flex justify-center ">
                <input type="text" placeholder="I'm looking for..."
                    class="w-2xl bg-zinc-800 rounded-2xl px-6 py-4 text-gray-300 outline-none mt-10 hover:border hover:border-blue-700">
            </div>
        </section>


        <!-- Top Jobs -->
        <section class="px-16 mt-20">

            <h2 class="mb-5 text-gray-300"> <span class="w-3 h-3  bg-white inline-block mr-1"></span> Top jobs</h2>

            <div class="grid grid-cols-3 gap-8">

                <!-- Card -->
                <div class="bg-zinc-800 rounded-xl p-6 hover:border hover:border-blue-700 group">
                    <p class="text-gray-400 text-sm">GovExec</p>

                    <h3 class="text-xl font-semibold mt-2 group-hover:text-blue-700">
                        Full stack Laravel Developer
                    </h3>

                    <p class="text-gray-400 mt-2">
                        Full Time - From $60,000
                    </p>

                    <div class="flex gap-2 mt-4 text-xs">
                        <span class="bg-zinc-700 px-3 py-1 rounded">Frontend</span>
                        <span class="bg-zinc-700 px-3 py-1 rounded">Backend</span>
                        <span class="bg-zinc-700 px-3 py-1 rounded">API</span>
                    </div>
                </div>
                <!-- Card -->
                <div class="bg-zinc-800 rounded-xl p-6 hover:border hover:border-blue-700 group">
                    <p class="text-gray-400 text-sm">GovExec</p>

                    <h3 class="text-xl font-semibold mt-2 group-hover:text-blue-700">
                        Full stack Laravel Developer
                    </h3>

                    <p class="text-gray-400 mt-2">
                        Full Time - From $60,000
                    </p>

                    <div class="flex gap-2 mt-4 text-xs">
                        <span class="bg-zinc-700 px-3 py-1 rounded">Frontend</span>
                        <span class="bg-zinc-700 px-3 py-1 rounded">Backend</span>
                        <span class="bg-zinc-700 px-3 py-1 rounded">API</span>
                    </div>
                </div>
                <!-- Card -->
                <div class="bg-zinc-800 rounded-xl p-6 hover:border hover:border-blue-700 group">
                    <p class="text-gray-400 text-sm">GovExec</p>

                    <h3 class="text-xl font-semibold mt-2 group-hover:text-blue-700">
                        Full stack Laravel Developer
                    </h3>

                    <p class="text-gray-400 mt-2">
                        Full Time - From $60,000
                    </p>

                    <div class="flex gap-2 mt-4 text-xs">
                        <span class="bg-zinc-700 px-3 py-1 rounded">Frontend</span>
                        <span class="bg-zinc-700 px-3 py-1 rounded">Backend</span>
                        <span class="bg-zinc-700 px-3 py-1 rounded">API</span>
                    </div>
                </div>
                <!-- Card -->
                <div class="bg-zinc-800 rounded-xl p-6 hover:border hover:border-blue-700 group">
                    <p class="text-gray-400 text-sm">GovExec</p>

                    <h3 class="text-xl font-semibold mt-2 group-hover:text-blue-700">
                        Full stack Laravel Developer
                    </h3>

                    <p class="text-gray-400 mt-2">
                        Full Time - From $60,000
                    </p>

                    <div class="flex gap-2 mt-4 text-xs">
                        <span class="bg-zinc-700 px-3 py-1 rounded">Frontend</span>
                        <span class="bg-zinc-700 px-3 py-1 rounded">Backend</span>
                        <span class="bg-zinc-700 px-3 py-1 rounded">API</span>
                    </div>
                </div>

            </div>

        </section>


        <!-- Tags -->
        <section class="px-16 mt-16">

            <h2 class="mb-6 text-gray-300">■ Tags</h2>

            <div class="flex flex-wrap gap-3">

                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Frontend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Backend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">API</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Laravel</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">DevOps</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Frontend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Backend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">API</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Laravel</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">DevOps</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Frontend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Backend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">API</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Laravel</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">DevOps</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Frontend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Backend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">API</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Laravel</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">DevOps</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Frontend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Backend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">API</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Laravel</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">DevOps</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Frontend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Backend</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">API</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">Laravel</span>
                <span class="bg-zinc-800 px-4 py-2 rounded-full text-sm">DevOps</span>

            </div>

        </section>


        <!-- Find Jobs -->
        <section class="px-16 mt-16 pb-20">

            <h2 class="mb-6 text-gray-300">■ Find Jobs</h2>

            <div class="bg-zinc-800 rounded-xl p-6 flex flex-col-2  items-center">

                <div class="w-20 h-20  rounded  bg-amber-300 mr-5">
                    <img src="{{ asset('/public/images/logo.svg') }}" alt="">
                </div>
                <div class=" flex flex-col w-full space-y-2">

                        <div class="flex justify-between">
                            <span class="text-xs text-gray-400">company name</span>
                            <div class="flex gap-3">
                                    <span class="bg-zinc-700 py-1 px-2 text-xs rounded-full">job name</span>
                                    <span class="bg-zinc-700 py-1 px-2 text-xs rounded-full">job name</span>
                            </div>

                        </div>

                        <div>
                            <h3 class="font-bold mb-8">full stack laravel developer</h3>
                        </div>

                        <div class="flex justify-between">
                            <span class="text-xs text-gray-400">full time job from $60,000</span>
                            <div class=" flex gap-3">
                                    <span class="bg-zinc-700 py-1 px-2 text-xs rounded-full">job name</span>
                                    <span class="bg-zinc-700 py-1 px-2 text-xs rounded-full">job name</span>
                                    <span class="bg-zinc-700 py-1 px-2 text-xs rounded-full">job name</span>
                            </div>

                        </div>
                </div>
                {{-- <div class="flex gap-4 items-center">

                <div class="w-20 h-20 bg-gray-700 rounded">
                    <img src="{{ asset('/public/images/logo.svg') }}" alt="">
                </div>

                <div>
                    <p class="text-gray-400 text-sm">GovExec</p>
                    <h3 class="text-lg font-semibold">
                        Full stack Laravel Developer
                    </h3>
                    <p class="text-gray-400 text-sm">
                        Full Time - From $60,000
                    </p>
                </div>

            </div>

            <div class="flex gap-2 text-xs ">
                <span class="bg-gray-800 px-3 py-1 rounded">Frontend</span>
                <span class="bg-gray-800 px-3 py-1 rounded">Backend</span>
                <span class="bg-gray-800 px-3 py-1 rounded">API</span>
            </div> --}}

            </div>

        </section>

    </div>

</x-layout>
