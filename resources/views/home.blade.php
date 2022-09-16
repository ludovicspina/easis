@extends('welcome')
@section('content')

    <!-- Modal toggle
    <button class="w-42 px-3 py-1 md:left-3 md:top-20 top-2 left-32 absolute text-white bg-blue-500 bg-opacity-25 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm md:px-5 md:py-2.5 text-center" type="button" data-modal-toggle="defaultModal">
        Voir les dernières mises à jour.
    </button> -->
    <div class="grid md:grid-cols-6 grid-cols-1">
        <div></div>
        <div
            class="gid grid-cols-1 md:col-span-2 mt-16 md:mt-32 backdrop-blur bg-black bg-opacity-25 md:py-6 py-8 md:px-4 md:rounded-3xl text-neutral-200 shadow-2xl">
            <div class="md:flex md:justify-center">
                <div class="text-center px-2 md:flex md:flex-col">
                    <div class="text-4xl md:text-6xl font-bold">Bienvenue sur le site</div>
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
                <div class="px-5 py-2 w-48 rounded-lg shadow-xl bg-black bg-opacity-25 shadow-md">
                    <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-800">
                            <li class="py-3">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium truncate text-white0">
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
                                            Dewylia & Ethalides
                                        </p>
                                        <p class="text-sm truncate text-gray-400">
                                            Officiers
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
                            class="text-white text-xl md:text-2xl bg-gradient-to-r shadow-lg shadow-blue-500/50 from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                        <a href="https://discord.gg/kt75BpeqtV">Discord</a>
                    </button>
                </div>
            </div>
        </div>
        <div></div>
        <div class="flex flex-col justify-center">
            <a href="{{ route('hdv') }}" class="md:mt-16 flex justify-center mt-24">
                <div
                    class="rounded-lg shadow-xl p-4 w-64 hover:bg-opacity-40 shadow-md backdrop-blur-md bg-black shadow-2xl bg-opacity-50">
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" style="filter: drop-shadow(1px 1px 3px #f6f6f6);"
                             class="w-20 h-20 text-gray-200">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z"/>
                        </svg>
                    </div>
                    <div class="text-gray-100 text-md text-center mt-4">Accéder à l'hôtel de vente</div>
                    <div class="text-gray-100 text-md text-center">Access to the auction house</div>
                    <div class="text-gray-100 text-md text-center">Zugang zum Auktionshaus</div>
                </div>
            </a>
            <a href="{{ route('contribution') }}" class="flex justify-center mt-4">
                <div
                    class="rounded-lg shadow-xl p-4 w-64 hover:bg-opacity-40 shadow-md backdrop-blur-md bg-black shadow-2xl bg-opacity-50">
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-20 h-20 text-gray-200"
                             style="filter: drop-shadow(1px 1px 3px #f6f6f6);">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/>
                        </svg>
                    </div>
                    <div class="text-gray-100 text-md text-center mt-4">Voir les statistiques de guilde</div>
                    <div class="text-gray-100 text-md text-center">View Guild Stats</div>
                    <div class="text-gray-100 text-md text-center">Gildenstatistik anzeigen</div>
                </div>
            </a>
            <a href="{{ route('membres') }}" class="flex justify-center mt-4">
                <div
                    class="rounded-lg shadow-xl p-4 w-64 hover:bg-opacity-40 shadow-md backdrop-blur-md bg-black shadow-2xl bg-opacity-50">
                    <div class="flex justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-20 h-20 text-gray-200"
                             style="filter: drop-shadow(1px 1px 3px #f6f6f6);">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                        </svg>
                    </div>
                    <div class="text-gray-100 text-md text-center mt-4">Membres de la guilde Easis</div>
                    <div class="text-gray-100 text-md text-center">Easis Guild Members</div>
                    <div class="text-gray-100 text-md text-center">Mitglieder der Easis-Gilde</div>
                </div>
            </a>
        </div>
        <div></div>

    </div>

    <style>
        html {
            background-image: url({{asset('img/bg/Traseia.jpg')}});
            background-size: cover;
            background-position: center;
        }
    </style>

@stop
