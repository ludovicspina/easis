@extends('welcome')
@section('content')

    <nav class="flex justify-center mt-1" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{route('home')}}"
                   class="inline-flex items-center text-sm font-medium text-gray-400 hover:text-white">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Accueil
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{route('guildes')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Les guildes</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="mt-4 flex just justify-center">
        <div
            class="p-6 w-1/2 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('home') }}" class="flex items-center justify-center">
                <img src="{{asset('/img/logo-easis.png')}}" class="mr-3 h-6 sm:h-10" alt="Easis Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Easis</span>
            </a>
            <p class="mb-3 mt-3 font-normal text-gray-500 dark:text-gray-400">Guilde historique déjà existante en 2007, nous
                nous efforçont de nous aider mutuellement et de garder un magnifique souvenir de ces moments.</p>
            <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Si vous pensez que rigoler est le plus important, nous seront ravis de vous voir jouer avec nous !</p>
        </div>
@stop
