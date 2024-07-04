<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://unpkg.com/tailwindcss@%5E2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <div class="flex h-screen bg-gray-100">

            <!-- sidebar -->
            <div style="background:#3C2A4D " class="bg-primary text-white w-64 min-h-screen overflow-y-auto transition-transform transform ease-in-out duration-300"
                id="sidebar">
                <div class="flex items-center justify-center h-16 bg-cyan-950-900">
                    <span class="text-[#E06F1F] font-bold uppercase">Onyx Events</span>
                </div>
                <div class="flex flex-col flex-1 overflow-y-auto">

                    <nav class="flex-1 px-2 py-12 bg-[#3C2A4D]">
                        <a href="{{ route('association.dashboard') }}" class="flex items-center px-4 py-5 gap-2 text-gray-100 hover:bg-gray-700">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.5 14H14.5V21H21.5V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.5 14H3.5V21H10.5V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M21.5 3H14.5V10H21.5V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.5 3H3.5V10H10.5V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                           <span> Dashbord</span>
                        </a>

                        <a href="{{ route('association.reservation') }}" class="flex  gap-2 items-center px-4 py-5  mt-2 text-gray-100 hover:bg-gray-700">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 17H8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 13H8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 9H9H8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 2V8H20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>


                            <span>   Gestion Reservation</span>

                        </a>


                        <details class="group">

                            <summary
                                class="flex items-center justify-between gap-3 pl-5 py-5 font-medium marker:content-none hover:cursor-pointer">

                                <span class="flex gap-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M23 20.9999V18.9999C22.9993 18.1136 22.7044 17.2527 22.1614 16.5522C21.6184 15.8517 20.8581 15.3515 20 15.1299"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16 3.12988C16.8604 3.35018 17.623 3.85058 18.1676 4.55219C18.7122 5.2538 19.0078 6.11671 19.0078 7.00488C19.0078 7.89305 18.7122 8.75596 18.1676 9.45757C17.623 10.1592 16.8604 10.6596 16 10.8799"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>



                                    <span>
                                        Gestion Evenements                                    </span>
                                </span>
                                <svg class="w-5 h-5 text-gray-500 transition group-open:rotate-90"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                                    </path>
                                </svg>
                            </summary>

                            <article class=" pb-4 pl-5">

                                <ul class="flex  border-l-2 border-gray-500  flex-col gap-4 pl-3 mt-4">

                                    <li class="flex gap-2">

                                        <a href="{{ route('association.evenements.index') }}">
                                          Mes evenements
                                        </a>
                                    </li>


                                    <li class="flex gap-2">


                                        <a href="{{ route('association.evenements.bloques') }}">
                                            Evenements bloques
                                        </a>
                                    </li>
                                </ul>

                            </article>

                        </details>


                        <a href="#" class="flex items-center gap-2 px-4 py-5  mt-2 text-gray-100 hover:bg-gray-700">
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5 8C18.5 6.4087 17.8679 4.88258 16.7426 3.75736C15.6174 2.63214 14.0913 2 12.5 2C10.9087 2 9.38258 2.63214 8.25736 3.75736C7.13214 4.88258 6.5 6.4087 6.5 8C6.5 15 3.5 17 3.5 17H21.5C21.5 17 18.5 15 18.5 8Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.23 21C14.0542 21.3031 13.8019 21.5547 13.4982 21.7295C13.1946 21.9044 12.8504 21.9965 12.5 21.9965C12.1496 21.9965 11.8054 21.9044 11.5018 21.7295C11.1982 21.5547 10.9458 21.3031 10.77 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            <span>  Notifications</span>
                        </a>




                    </nav>
                    {{-- <form action="http://127.0.0.1:8000/auth/logout" method="POST">
                        <input type="hidden" name="_token" value="ymEkCLBFpgkdaSbidUArRsdHbER5DkT6ByS3eJYb">
                        <button type="submit" class="text-red-500 text-sm px-2 py-1 hover:bg-red-200 rounded-md">
                            Log Out
                        </button>
                    </form> --}}
                </div>
            </div>

            <!-- Page Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <header class="flex items-center justify-between h-16 bg-white border-b border-gray-200">
                    <button class="text-black focus:outline-none" id="toggleSidebar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <input class="mx-4 h-4  w-full border-spacing-0 border-0  px-4 py-5 " type="text"
                        placeholder="Search">
                    <i class="fs fa-search"></i>
                    

<div class="hidden sm:flex sm:items-center pr-8 sm:ms-6">
                       

   
        <details class="group">

            <summary
                class="flex items-center justify-between gap-2 p-2 font-medium marker:content-none hover:cursor-pointer">

              
                    <div class="bg-center bg-cover bg-no-repeat rounded-full inline-block h-12 w-12 ml-2"
                                        style="background-image: url(https://i.pinimg.com/564x/de/0f/3d/de0f3d06d2c6dbf29a888cf78e4c0323.jpg)">
                                    </div>

                    
                                         <div> {{ Auth::user()->prenom }}</div> 
                    </span>
                </span>
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
            </summary>
                               
            <article class="px-4 pb-4">
                <ul class="flex flex-col gap-1 pl-2">
                  
                    <li><form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Deconnexion') }}
                                    </x-dropdown-link>
                                </form></li>
                 
                </ul>
            </article>

        </details>
    
  

                    </div>

                </header>




                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                    <div class="container mx-auto px-6 py-8">
                        {{ $slot }}
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>

</html>
