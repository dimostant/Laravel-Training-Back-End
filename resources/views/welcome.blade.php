<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Portfolio</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">

    <!-- Navigation -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <!-- <img src="https://flowbite.com/docs/images/logo.svg" -->
                <img src="{{ asset('img/blue-cruise-ship-logo-vector-21297795.png') }}" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CEMENTEMPORIKH A.E</span>
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                    </li>
                    <li class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">
                            About 
                            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar" class="absolute z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownNavbarLink">
                                <li>
                                  <a href="notfound" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Staff Info</a> 
                                </li>
                                <li>
                                    <a href="https://www.metlengroup.com/el/i-etaireia-mas/" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">External Contributors</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li>
                        <a href="/actions" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Actions</a>
                    </li> -->
                    <li>
                        <a href="/pricing" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="/form" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 

    <!-- Main Section -->
    <section class="bg-white dark:bg-gray-500">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <h1 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Konstantinos Meakis Services</h1>
        </div>
    </section>
    
    <!-- Service Highlights -->
    <section class="bg-white dark:bg-gray-800">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-bold text-gray-900 dark:text-white">Powering innovation at <span class="font-extrabold">200,000+</span> companies worldwide</h2>
                <p class="mb-4 font-light">Track coworkers across the enterprise through an open, collaborative GPS system! Link ports across the world! Providing them with the best first degree resources and ingest data from other coworking tools, so your provider support and operations teams have RICHer consensual information to rapidly build your kingdom, handle requests, incidents, and changes!</p>
                <p class="mb-4 font-medium">Deliver great service experiences fast. Accelerate critical development money gathering, eliminate "inconveniences", and deploy your night will with ease.</p>
            </div>
        </div>
    </section>
    
    <!-- About Us Section -->
    <section class="bg-white dark:bg-gray-900">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">We didn't reinvent the wheel</h2>
                <p class="mb-4">But we did invent the pavement wheel! We are strategists, constructors, and developers. Innovators and "problem solvers". Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
                <p class="mb-5">Welcome to the number one pavement installment company! Solid and concrete work for all your needs. Flexibility is our motto! We install concrete anywhere! Under bridges, inside lakes, inside houses, in basements, under construction tools. Don't believe us? Email our boss at 
                <a href="mailto:KonstantinosMeakis@cementemporikh.gr" style="color: #FFFFFF; font-weight: bold;">KonstantinosMeakis@cementemporikh.gr</a>
                , and you won't believe your eyes!</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://assets-global.website-files.com/62a6f26ea434500b4f20edb2/6408889b14eddcb8c8b90f47_woman-working-construction.png" alt="Construction Work 1">
                <img class="w-full rounded-lg" src="https://i.ytimg.com/vi/c24u5_KvqfI/maxresdefault.jpg" alt="Construction Work 2">
            </div>
        </div>
    </section>
    
    <!-- Shipping Section -->
    <section class="bg-white dark:bg-gray-700">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="https://cdn.britannica.com/32/101832-004-B15BE48C/Passenger-ship-shipyard-Papenburg-Ger.jpg" alt="Shipping Work 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Containerterminal_Altenwerder_%28Hamburg-Altenwerder%29.Iris_Bolten.4.phb.ajb.jpg/1200px-Containerterminal_Altenwerder_%28Hamburg-Altenwerder%29.Iris_Bolten.4.phb.ajb.jpg" alt="Shipping Work 2">
            </div>
            <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">We aren't horsing around!</h2>
                <p class="mb-4">The greatest shipping fleet! We have an army of strong ships! They are all-time synchronized, well-maintained, and ready to go! Connecting the world together and making business just a word and reality! Explore all the available prices. Last year, we broke the world record with 1,000,000 tons of flour shipped across the world with our Ship Winner Nour Two!</p>
            </div>
        </div>
    </section>

<!-- Footer -->
<footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
    <div class="mx-auto max-w-screen-xl">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com" class="flex items-center">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-8" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Contact us</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4" style="display: flex; justify-content: space-between;">
                        <span>Local</span>
                        <a class="hover:underline">+30 2421 566969</a>
                    </li>
                    <li style="display: flex; justify-content: space-between;">
                        <span style="margin-right: 10px;">Cellphone</span>
                        <a class="hover:underline">+30 (695)-5556669</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                <ul class="text-gray-600 dark:text-gray-400">
                    <li class="mb-4">
                        <a href="notfound" class="hover:underline">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="notfound" class="hover:underline">Terms &amp; Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<footer class="bg-white dark:bg-gray-800 py-4">
    <div class="text-center text-gray-500 dark:text-gray-400">
        &copy; {{ date('Y') }} Portfolio. All rights reserved.
    </div>
</footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>