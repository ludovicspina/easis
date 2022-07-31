@extends('welcome')
@section('content')


    <nav class="flex justify-center my-1" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{route('home')}}"
                   class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Accueil
                </a>
            </li>
        </ol>
    </nav>

    <div class="flex justify-center mt-32 text-neutral-200">
        <div class="flex flex-col">
            <div class="text-6xl font-bold">Bienvenue sur le site</div>
            <div class="text-6xl text-indigo-400 font-bold">de la guilde Easis !</div>
            <div class="text-xl mt-6 text-neutral-300 w-3/4">Vous retrouverez ici toutes les informations relatives à la
                guilde, ainsi que des guides et des news.
            </div>
        </div>

        <div class="px-5 py-2 bg-white w-40 rounded-lg border shadow-md dark:bg-gray-700 dark:border-gray-600">
            <div class="flow-root">
                <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-800">
                    <li class="py-3">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Azatyss
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    Guild master
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    pamp1n
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    Guild master
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="py-3">
                        <div class="flex items-center space-x-4">
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                    Dewylia
                                </p>
                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                    Officier
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-40">
        <button type="button"
                class="text-white text-2xl bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            <a href="https://discord.gg/kt75BpeqtV">Discord</a>
        </button>
    </div>
@stop
