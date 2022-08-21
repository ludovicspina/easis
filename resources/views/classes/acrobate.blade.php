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
                    <a href="{{route('classes')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Classes</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{route('acrobate')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Acrobate</a>
                </div>
            </li>
        </ol>
    </nav>


    <div class="flex justify-center mt-6 text-neutral-200">
        <div class="flex flex-col">
            <div class="text-4xl font-bold text-center">La voie de l'Acrobate</div>
            <div class="text-2xl mt-4 font-bold text-center">Les grandes lignes ...</div>
        </div>
    </div>

    <div class="grid grid-cols-0 mt-6 md:grid-cols-2 gap-10 md:mx-64 mx-4">
        <div class="flex justify-left my-6 text-neutral-200">
            <div class="flex flex-col">
                <div class="text-xl text-neutral-300">Les Acrobates sont des DPS à très grande distance.
                </div>
                <div class="text-xl mt-4 text-neutral-300">L'Acrobate évoluera en deux classes distinctes au niveau 60
                    :
                    Ranger et Jester.
                </div>
                <div class="text-xl mt-4 text-neutral-300">Le Ranger sera orienté dans du mono-cible ou de l'AOE, le rendant très flexible, contrairement au
                    Jester qui lui sera orienté dans du mono-cible uniquement. (Allez voir les
                    guides <a class="text-indigo-400 underline" href="#">Ranger</a> & <a
                        class="underline text-indigo-400" href="#">Jester</a>)
                </div>
                <div class="text-xl font-semibold mt-4 text-neutral-300 animate-pulse">Mais avant ça, il faut passer
                    niveau 60 ...
                </div>
            </div>
        </div>
        <div class="flex justify-center md:my-6 text-neutral-200">
            <div class="text-xl flex justify-center text-neutral-300">
                <img class="md:ml-32 ml-16 h-64 w-64" src="{{asset('img/classes/ranger.png')}}">
                <img class="md:ml-32 ml-16 h-64 w-64" src="{{asset('img/classes/jester.png')}}">
            </div>
        </div>
    </div>


    <div class="grid grid-cols-0 mt-6 gap-10 md:mx-64 w-3/4 mx-4">
        <div class="flex justify-left my-6 text-neutral-200">
            <div class="flex flex-col">
                <div class="text-3xl underline text-purple-300">Comment passer 60 avec son Acrobate ?
                </div>
            </div>
        </div>

@stop
