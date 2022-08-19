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
                    <a href="{{route('magicien')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Magicien</a>
                </div>
            </li>
        </ol>
    </nav>


    <div class="flex justify-center mt-6 text-neutral-200">
        <div class="flex flex-col">
            <div class="text-4xl font-bold text-center">La voie du Magicien</div>
            <div class="text-2xl mt-4 font-bold text-center">Les grandes lignes ...</div>
        </div>
    </div>

    <div class="grid grid-cols-0 mt-6 md:grid-cols-2 gap-10 md:mx-64 mx-4">
        <div class="flex justify-left my-6 text-neutral-200">
            <div class="flex flex-col">
                <div class="text-lg text-neutral-300">Les Magicien sont des DPS très puissant mais faibles en règle
                    générale.
                </div>
                <div class="text-lg mt-4 text-neutral-300">Le Magicien évoluera en deux classes distinctes au niveau 60 :
                    Sorcier et Elementaliste.
                </div>
                <div class="text-lg mt-4 text-neutral-300">Le Sorcier sera orienté dans du mono-cible, contrairement à
                    l'Elémentalste qui lui sera orienté dans de l'AOE. (Cela n'est pas une généralité, allez voir les guides <a class="text-indigo-400 underline" href="#">Sorcier</a> & <a class="underline text-blue-500" href="#">Elementaliste</a>)
                </div>
            </div>
        </div>
        <div class="flex justify-center md:my-6 text-neutral-200">
            <div class="text-lg text-neutral-300">
                <div class="flex flex-col gap-2">
                    <p>Ils manient les 5 éléments, chacun prenant l'ascendant sur un autre : </p>
                    <img class="md:ml-32 ml-16 h-64 w-64" src="{{asset('img/elements.png')}}">
                    <p></p>


                </div>
            </div>
        </div>
    </div>

@stop
