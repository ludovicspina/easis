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
        </ol>
    </nav>

    <div class="flex justify-center my-6 text-neutral-200">
        <div class="flex flex-col">
            <div class="text-4xl font-bold text-center">Les différentes classes</div>
            <div class="text-xl text-center mt-6 text-neutral-300">Voici les quatres différentes voies que vous pouvez choisir dès le niveaux 15.
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <div class="grid grid-cols-0 md:grid-cols-2 gap-10 mx-4 md:mx-0">
            <a href="{{route('mercenaire')}}"
               class="flex items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-32 w-16 md:h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                     src="{{asset('/img/classes/blade.png')}}" alt="">
                <img class="object-cover w-full h-32 w-16 md:h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                     src="{{asset('/img/classes/knight.png')}}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Voie du Mercenaire</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">qui vous fera devenir Assassin ou Chevalier.</p>
                </div>
            </a>
            <a href="{{route('acrobate')}}"
               class="flex items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-32 w-16 md:h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                     src="{{asset('/img/classes/jester.png')}}" alt="">
                <img class="object-cover w-full h-32 w-16 md:h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                     src="{{asset('/img/classes/ranger.png')}}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Voie de l'Acrobate</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">qui vous fera devenir Jester ou Ranger.</p>
                </div>
            </a>
            <a href="{{route('acolyte')}}"
               class="flex items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-32 w-16 md:h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                     src="{{asset('/img/classes/billposter.png')}}" alt="">
                <img class="object-cover w-full h-32 w-16 md:h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                     src="{{asset('/img/classes/ringmaster.png')}}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Voie de l'Acolyte</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">qui vous fera devenir Moine ou Prêtre.</p>
                </div>
            </a>
            <a href="{{route('magicien')}}"
               class="flex items-center bg-white rounded-lg border shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full h-32 w-16 md:h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                     src="{{asset('/img/classes/psykeeper.png')}}" alt="">
                <img class="object-cover w-full h-32 w-16 md:h-96 rounded-t-lg md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                     src="{{asset('/img/classes/elementor.png')}}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Voie du Magicien</h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">qui vous fera devenir Sorcier ou Elémentaliste.</p>
                </div>
            </a>
        </div>
    </div>

@stop
