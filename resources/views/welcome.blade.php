<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset("/img/logo-easis.png") }}">
    <title>Easis</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.1/dist/flowbite.min.css"/>
</head>

<body class="antialiased bg-gray-800">

@if(session('status'))
    <div class="flex p-4 mb-4 fixed m-4 opacity-50 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
        <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">{{ session('status') }}</span>
        </div>
    </div>
@endif

<nav class="px-2 py-2 bg-gray-900 border-gray-800">
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


        <div class="hidden w-full md:block md:w-auto bg-gray-900" id="navbar-multi-level">
            <ul class="flex flex-col p-4 mt-4 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 bg-gray-900 border-gray-700">
            <!-- <li>
                    <a href="{{ route('guildes') }}"
                       class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-400 hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Les guildes</a>
                </li> -->
                <li>
                    <a href="{{ route('cdgArchives') }}"
                       class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-400 hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Archives CDG</a>
                </li>
                <li>
                    <a href="{{ route('contribution') }}"
                       class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-400 hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">XP
                        de Guilde</a>
                </li>
                <li>
                    <a href="{{ route('astuces') }}"
                       class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-400 hover:text-white hover:bg-gray-700 md:hover:bg-transparent">Astuces</a>
                </li>
                <li>
                    <a href="{{ route('wiki') }}"
                       class="block py-2 pr-4 pl-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 text-gray-400 hover:text-white hover:bg-gray-700 hover:text-white md:hover:bg-transparent">Wiki</a>
                </li>
                <li>
                    <a href="{{ route('classes') }}" data-tooltip-target="tooltip-hover" data-tooltip-trigger="hover"
                       class="block py-2 pr-4 pl-3 rounded animate-pulse md:hover:bg-transparent md:border-0 md:p-0 text-gray-400 ">Classes</a>
                </li>
                <div id="tooltip-hover" role="tooltip"
                     class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    En construction ...
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </ul>
        </div>
    </div>
</nav>

@section('content')
@show
<div class="mt-32"></div>
<footer
    class="p-4 inset-x-0 bottom-0 fixed shadow md:flex md:items-center md:justify-between md:p-6 bg-gray-900">
    <span class="text-sm text-gray-500 sm:text-center text-gray-400">© 2022 <a href="https://flowbite.com/"
                                                                               class="hover:underline">FondationPXN™</a> All Rights Reserved.
    </span>
    <div>
        <span
            class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-gray-300">Level : <span
                class="text-green-500">36</span></span>
        <span
            class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-gray-300">Places : 58/64</span>
        <span
            class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-gray-300">Niveau moyen : 85</span>
    </div>
    <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 text-gray-400 sm:mt-0">

        <li>
            <a href="https://discord.gg/kt75BpeqtV" class="mr-4 hover:underline md:mr-6">Discord</a>
        </li>
        <li>
            <a href="mailto:pamp1n@proton.me" class="mr-4 hover:underline md:mr-6">Contact</a>
        </li>
        @if(!Auth::user())
            <li>
                <a href="{{ route('login') }}" class="hover:underline">Se connecter</a>
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
