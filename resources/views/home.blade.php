@extends('welcome')
@section('content')

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

        </div>
    </div>


@stop
