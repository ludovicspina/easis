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
                            <li class="flex justify-center md:mt-0 mt-2">
                                <button
                                    class="border bg-blue-800 bg-opacity-50 border-blue-800 rounded block text-white font-medium rounded-lg px-5 text-center"
                                    type="button" data-modal-toggle="userModal">
                                    Espace utilisateur
                                </button>
                            </li>
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
            <!-- Main L -->
            <div id="userModal" tabindex="-1" aria-hidden="true"
                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                            <div class="text-xl flex font-semibold text-gray-900 dark:text-white">
                                Espace utilisateur
                            </div>
                            <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
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
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            @if(Auth::user())
                                <div class="text-base flex flex-col leading-relaxed text-gray-400">
                                    <div class="text-gray-400">Pseudo : {{ Auth::user()->name }}</div>
                                    <div class="text-gray-400">Mail : {{ Auth::user()->email }}</div>
                                </div>
                            @else
                                <p class="flex flex-col text-base leading-relaxed text-gray-400">
                                    <a class="text-center hover:text-white" href="{{ route('login') }}">Se connecter</a>
                                    <a class="text-center hover:text-white"
                                       href="{{ route('register') }}">S'inscrire</a>
                                </p>
                            @endif
                        </div>
                        <!-- Modal footer -->
                        @if(Auth::user())
                            <div
                                class="flex justify-center items-center p-2 rounded-b border-t border-gray-600">

                                <form action="{{ route('logout') }}"
                                      method="POST">
                                    @csrf
                                    <button type="submit"
                                            class="focus:outline-none text-white font-medium rounded-lg text-sm px-5 py-2 mr-2 mb-2 bg-red-800 hover:bg-red-700 focus:ring-red-900">
                                        Se déconnecter
                                    </button>
                                </form>

                            </div>
                        @endif
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
