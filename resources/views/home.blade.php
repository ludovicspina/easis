@extends('welcome')
@section('content')

    <!-- Modal toggle -->
    <button class="w-42 px-3 py-1 md:left-3 md:top-20 top-2 left-32 absolute text-white bg-blue-500 bg-opacity-25 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 md:py-2.5 text-center" type="button" data-modal-toggle="defaultModal">
        Voir les dernières mises à jour.
    </button>

    <div class="gid grid-cols-1 mt-16 md:mt-32 text-neutral-200">
        <div class="md:flex md:justify-center">
        <div class="text-center px-2 md:flex md:flex-col">
            <div class="text-4xl md:text-6xl font-bold">Bienvenue sur le site </div>
            <div class="text-4xl md:text-6xl text-indigo-400 font-bold">de la guilde Easis !</div>
            <div class="text-lg px-2 md:text-xl mt-6 text-neutral-300">Vous retrouverez ici toutes
                les
                informations
                relatives à la
                guilde, ainsi que des guides et des news.
            </div>
        </div>
        </div>
        <div class="flex justify-center mt-10 md:visible">
            <div class="px-5 py-2 w-40 rounded-lg border shadow-md bg-gray-700 border-gray-600">
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-800">
                        <li class="py-3">
                            <div class="flex items-center space-x-4">
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium truncate text-white">
                                        Azatyss & pamp1n
                                    </p>
                                    <p class="text-sm truncate text-gray-400">
                                        Guild masters
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="py-3">
                            <div class="flex items-center space-x-4">
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium truncate text-white">
                                        Dewylia
                                    </p>
                                    <p class="text-sm truncate text-gray-400">
                                        Officier
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col">
            <div class="flex justify-center text-lg text-center md:text-xl mt-10 text-neutral-300">N'hésitez pas à
                rejoindre le discord et
                ainsi avoir une chance
                d'entrer dans la guilde!
            </div>


            <div class="mt-4 flex justify-center">
                <button type="button"
                        class="text-white text-xl md:text-2xl bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                    <a href="https://discord.gg/kt75BpeqtV">Discord</a>
                </button>
            </div>


            <!-- Main modal -->
            <div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Dernières mises à jour :
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6">
                            <p class="text-base leading-relaxed text-gray-300">
                                - Changement du logo</p>
                            <p class="text-base leading-relaxed text-gray-300">
                                - Hotfix responsive (accès mobile)</p>
                            <p class="text-base leading-relaxed text-gray-300">
                                - Avancement de la page <a class="underline text-blue-400" href="{{ route('magicien') }}">Magicien</a></p>
                            <p class="text-base leading-relaxed text-gray-300">
                                - Création de cette modale de mise à jour</p>
                        </div>

                    </div>
                </div>
            </div>



        </div>
    </div>


@stop
