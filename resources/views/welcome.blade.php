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
    @elseif(Request::is('membres'))
        <body>
        @else
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


                    <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                        <ul class="flex flex-col mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 border-gray-700">
                            <li class="flex justify-center">
                                <a href="{{ route('hdv') }}"
                                   class="py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-200 hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Hotel
                                    de vente</a>
                            </li>
                            <li class="flex justify-center">
                                <a href="{{ route('contribution') }}"
                                   class="py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-200 hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">XP
                                    de Guilde</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <div class="flex justify-center mt-2">
                <div id="toast-notification"
                     class="md:absolute md:right-5 md:top-20 p-3 w-full max-w-xs rounded-lg shadow bg-neutral-900 shadow-xl bg-opacity-90 text-gray-300"
                     role="alert">
                    <div class="flex items-center">
                        <div class="inline-block relative shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="z-10 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                        </div>
                        @if(Auth::user())
                            <div class="ml-3 text-sm font-normal">
                                <div class="text-sm font-semibold underline text-white">Connecté en tant
                                    que {{ Auth::user()->name }}</div>
                                <div class="text-sm text-neutral-300 font-normal">{{ Auth::user()->email }}</div>
                                <form action="{{ route('logout') }}"
                                      method="POST">
                                    @csrf
                                    <button type="submit"
                                            class="text-sm hover:underline hover:text-red-700 text-red-500 font-normal">
                                        Se déconnecter
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="ml-3 text-sm font-normal">
                                <div class="text-sm font-semibold underline text-white">Déconnecté</div>
                                <div class="flex gap-1">
                                    <a href="{{ route('login') }}" class="hover:underline hover:text-blue-700 text-sm text-blue-500 font-normal">Se
                                        connecter</a>
                                    <div>ou</div>
                                    <a href="{{ route('register') }}"
                                       class="hover:underline hover:text-blue-700 text-sm text-blue-500 font-normal">s'inscrire</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Main L -->
            <div id="userModal" tabindex="-1" aria-hidden="true"
                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative rounded-lg shadow bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex justify-between items-start p-4 rounded-t border-b border-gray-600">
                            <div class="text-xl flex font-semibold text-white">
                                Espace utilisateur
                            </div>
                            <button type="button"
                                    class="text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white"
                                    data-modal-toggle="userModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Fermer</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div
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
                </ul>
            </footer>
            <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
            </body>
</html>
