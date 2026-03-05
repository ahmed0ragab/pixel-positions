<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
      @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-zinc-900 text-white pt-5 font-hanken ">

    {{-- navbar medium to large screens --}}
    <nav class="flex justify-between  px-10 items-center">
       <div>
            <a href="#">
                <img src="{{ asset('/images/logo.svg') }}" alt="">
            </a>
       </div>
       <div class="flex  space-x-7 font-semi-bold text-lg">
        <a href="#" class="hover:text-blue-700">Jobs</a>
        <a href="#" class="hover:text-blue-700">Career</a>
        <a href="#" class="hover:text-blue-700">Salaries</a>
        <a href="#" class="hover:text-blue-700">Companies</a>
       </div>
       <div class="font-bold ">
        <a href="#" class="text-lg hover:text-blue-700"><span class="w-3 h-3 bg-blue-600 inline-block mr-1 text-lg"></span> Post a Job</a>
       </div>
    </nav>

    {{-- responsive navbar for mobile screens (comming soon) --}}


            <main class="px-30 mt-6">
                {{ $slot }}
            </main>
</body>
</html>
