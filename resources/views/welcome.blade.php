<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset("/img/logo-easis.png") }}">
    <title>Easis</title>

    <!-- Ajax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
            integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DN05ZB8MGM"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-DN05ZB8MGM');
    </script>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css"/>
</head>

@if(Request::is('/'))
    <body>
    @endif


    @if(!Request::is('/'))
        <body class="bg-gray-800">
        @endif
        <nav class="px-2 py-2 bg-black backdrop-blur-2xl bg-opacity-25">
            <div class="container flex flex-wrap justify-between items-center mx-auto">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{asset('/img/logo-easis.png')}}" class="mr-3 h-6 sm:h-10" alt="Easis Logo">
                    <span class="self-center text-xl font-semibold whitespace-nowrap text-white">Easis</span>
                </a>
                <button data-collapse-toggle="navbar-multi-level" type="button"
                        class="inline-flex justify-center items-center ml-3 text-gray-400 rounded-lg md:hidden hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 hover:text-white focus:ring-gray-500"
                        aria-controls="navbar-multi-level" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>


                <div class="w-full md:block md:w-auto" id="navbar-multi-level">
                    <ul class="flex flex-col p-4 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 border-gray-700">
                        <!-- <li>
                        <a href="http://guilde-easis.fr/guildes"
                           class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-400 hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Les guildes</a>
                    </li> -->
                        <li>
                            <a href="https://guilde-easis.fr/hdv"
                               class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-200 hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Hotel
                                de vente</a>
                        </li>
                        <li>
                            <a href="https://guilde-easis.fr/contribution"
                               class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-200 hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">XP
                                de Guilde</a>
                        </li>
                        <li>
                            <a href="https://guilde-easis.fr/membres"
                               class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-200 hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Membres</a>
                        </li>
                        <div class="flex items-center md:order-2">
                            <button type="button"
                                    class=" p-1 flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                    data-dropdown-placement="bottom">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="text-gray-100 w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"></path>
                                </svg>

                            </button>
                            <!-- Dropdown menu -->


                            <div
                                class="z-50 text-base list-none bg-white rounded divide-y divide-gray-100 shadow hidden"
                                id="user-dropdown"
                                style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 10px, 0px);"
                                data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                                <div class="py-3 px-4">
                                    <span class="block text-sm text-gray-900 ">pamp1n</span>
                                    <span
                                        class="block text-sm font-medium text-gray-500 truncate">pamp1n@proton.me</span>
                                </div>

                                <ul class="py-1" aria-labelledby="user-menu-button">
                                    <li>
                                        <form action="https://guilde-easis.fr/logout"
                                              class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                                              method="POST">
                                            <input type="hidden" name="_token"
                                                   value="P2aCQvsyKIMRTcK15wBKAp76elABK0ho6nd9UkoR">
                                            <button type="submit" class="hover:underline">
                                                Se déconnecter
                                            </button>
                                        </form>
                                    </li>
                                    <li>@if(Auth::user())
                                            <div
                                                class="hidden z-50 text-base list-none bg-white rounded divide-y divide-gray-100 shadow"
                                                id="user-dropdown">
                                                <div class="py-3 px-4">
                                                    <span
                                                        class="block text-sm text-gray-900 ">{{ Auth::user()->name }}</span>
                                                    <span
                                                        class="block text-sm font-medium text-gray-500 truncate">{{ Auth::user()->email }}</span>
                                                </div>

                                                <ul class="py-1" aria-labelledby="user-menu-button">
                                                    <li>
                                                        <form action="{{ route('logout') }}"
                                                              class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100"
                                                              method="POST">
                                                            @csrf
                                                            <button type="submit"
                                                                    class="hover:underline">
                                                                Se déconnecter
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>

                                            </div>
                                        @else
                                            <div
                                                class="hidden z-50 text-base list-none bg-white rounded divide-y divide-gray-100 shadow"
                                                id="user-dropdown">
                                                <div class="py-3 px-4">
                                                    <a href="{{ route('login') }}" class="block text-sm text-gray-900 ">Se
                                                        connecter</a>
                                                    <a href="{{ route('register') }}"
                                                       class="block text-sm text-gray-900 ">S'inscrire</a>
                                                </div>
                                            </div>
                                        @endif</li>
                                </ul>

                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        @section('content')
        @show
        <div class="mt-32"></div>
        <footer
            class="p-4 inset-x-0 bottom-0 md:fixed shadow md:flex md:items-center md:justify-between md:p-6 bg-black backdrop-blur-2xl bg-opacity-25">
    <span class="text-sm text-gray-200 sm:text-center">© 2022 <a href="#"
                                                                 class="hover:underline">FondationPXN™</a> All Rights Reserved.
    </span>
            <div>
        <span
            class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-gray-100">Level : <span
                class="text-blue-500">40</span></span>
                <span
                    class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-gray-100">Places : 64/68</span>
                <span
                    class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-gray-100">Niveau moyen : 94</span>
            </div>
            <ul class="flex flex-wrap gap-4 items-center mt-3 text-sm text-gray-400 sm:mt-0">

                <li>
                    <a href="https://discord.gg/kt75BpeqtV" class="hover:underline">Discord</a>
                </li>
                <li>
                    <a href="mailto:pamp1n@proton.me" class="hover:underline">Contact</a>
                </li>
                @if(!Auth::user())
                    <li>
                        <a href="{{ route('login') }}" class="hover:underline">Se connecter</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="hover:underline">S'inscrire</a>
                    </li>
                @else
                    <li>
                        <form action="{{ route('logout') }}" class="rounded-b" method="POST">
                            @csrf
                            <button type="submit"
                                    class="hover:underline">
                                Se déconnecter
                            </button>
                        </form>
                    </li>
                @endif
            </ul>
        </footer>
        <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
        </body>
</html>
