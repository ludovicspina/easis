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
                    <a href="{{route('membres')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Membres</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="grid grid-cols-1 md:grid-cols-5 md:gap-8 gap-3 md:mt-10">
        @foreach($members as $membre)
            <div class="flex justify-center">
                <div
                    class="w-full max-w-xs rounded-lg shadow-md backdrop-blur-3xl">
                    <div class="flex flex-col items-center py-10">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-10 h-10 text-gray-200">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                        </svg>
                        <h5 class="mb-1 text-xl font-medium text-white">{{ $membre->pseudo }}</h5>
                        <span class="text-sm text-gray-400"></span>
                        <span
                            class="text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-gray-300">{{ $membre->classe }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <style>
        html {
            background-image: url({{asset('img/bg/Traseia.jpg')}});
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>

@stop
