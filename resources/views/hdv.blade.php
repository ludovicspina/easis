@extends('welcome')
@section('content')
    <div class="flex justify-center">
        <nav class="flex justify-center mt-1" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{route('home')}}"
                       class="inline-flex items-center text-sm font-medium text-white hover:text-white">
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
                        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <a href="{{route('hdv')}}"
                           class="ml-1 text-sm font-medium md:ml-2 text-white hover:text-white">Hotel de vente</a>
                    </div>
                </li>
            </ol>
        </nav>
    </div>

    <div class="mb-2 flex justify-center text-3xl text-white font-bold">
        Genèse
    </div>

    <div id="serverTab">
        <div class="p-b rounded-lg" id="genese" role="tabpanel"
             aria-labelledby="genese-tab">
            <!-- Main modal -->
            <div id="add-item-g" tabindex="-1" aria-hidden="true"
                 class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-auto md:inset-0 h-modal md:h-full">
                <div class="relative p-4 h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative rounded-lg shadow backdrop-blur-xl bg-opacity-10">
                        <button type="button"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-800 hover:text-white"
                                data-modal-toggle="add-item-g">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Fermer</span>
                        </button>
                        <div class="py-6 px-6 lg:px-8">

                            <form autocomplete="off" action="{{ route('hdvAdd') }}" class="col-span-1 w-auto mt-4"
                                  method="POST">
                                @csrf
                                <div class="mt-8 md:flex md:flex-col">
                                    <div class="flex justify-evenly gap-10">
                                        <div class="flex flex-col mb-4">
                                            <div>
                                                <input checked type="radio" value="1" name="typeRequete"
                                                       class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                                <label for="default-radio-1"
                                                       class="ml-2 text-sm font-medium text-gray-300">Je vend un
                                                    objet</label>
                                            </div>
                                            <div>
                                                <input type="radio" value="0" name="typeRequete"
                                                       class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                                <label for="default-radio-2"
                                                       class="ml-2 text-sm font-medium text-gray-300">Je recherche un
                                                    objet</label>
                                            </div>
                                        </div>
                                        <div class="relative z-0 mb-6 w-48 group">
                                            <input type="text" name="joueur" id="joueur"
                                                   value="@if(auth()->user()){{ auth()->user()->name }}@endif"
                                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                   placeholder=" " required/>
                                            <label for="floating_last_name"
                                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pseudo
                                                IG</label>
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <div class="flex justify-center gap-2">
                                            <div class="relative z-0 mb-3 w-48 group">
                                                <input type="text" name="objet" id="objet"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" " required/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Objet</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="niveau" id="niveau"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">+</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="quantite" id="quantite" value="1"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" " required/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantité</label>
                                            </div>
                                        </div>
                                        <div class="flex justify-center gap-2">
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="for" id="for"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">FOR</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="end" id="end"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">END</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="dex" id="dex"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">DEX</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="int" id="int"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">INT</label>
                                            </div>
                                        </div>
                                        <div class="flex justify-center gap-2">
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="eau" id="eau"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Eau</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="feu" id="feu"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Feu</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="terre" id="terre"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Terre</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="foudre" id="foudre"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Foudre</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="vent" id="vent"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Vent</label>
                                            </div>
                                        </div>
                                        <div class="flex justify-center gap-2">
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="patk" id="patk"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">%
                                                    ATK</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="pdef" id="pdef"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">%
                                                    DEF</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="ppv" id="ppv"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">%
                                                    PV</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="pmp" id="pmp"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">%
                                                    PM</label>
                                            </div>
                                            <div class="relative z-0 mb-6 w-16 group">
                                                <input type="number" name="ppf" id="ppf"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">%
                                                    PF</label>
                                            </div>
                                        </div>
                                        <div class="flex justify-center gap-2">
                                            <div class="relative z-0 mb-6 w-64 group">
                                                <input type="text" name="eveil" id="eveil"
                                                       class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                       placeholder=" "/>
                                                <label for="floating_first_name"
                                                       class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Eveil</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex justify-center gap-2">

                                        <div class="relative z-0 mb-6 w-48 group">
                                            <input type="number" name="prix" id="prix"
                                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                                   placeholder=" " required/>
                                            <label for="floating_first_name"
                                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prix</label>
                                        </div>
                                    </div>

                                    <div><input name="region" type="hidden" value="eu"></div>
                                    <div><input name="serveur" type="hidden" value="genese"></div>
                                    @if(auth()->user())
                                        <div><input name="userId" type="hidden" value="{{ auth()->user()->id }}"></div>
                                    @endif
                                </div>
                                <button type="submit"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-80 sm:w-auto px-5 py-2.5 text-center">
                                    Valider
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4"><!-- Modal toggle -->
                <div class="flex gap-10">
                    @if(auth()->user())
                        <button
                            class="block text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800"
                            type="button" data-modal-toggle="add-item-g">
                            Ajouter un objet
                        </button>
                    @else
                        <div
                            class="block text-white cursor-not-allowed focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800"
                            type="button">
                            <a href="{{ route('register') }}">Connecter vous pour ajouter un objet</a>
                        </div>
                    @endif

                    <div>
                        <input id="filterInput" onkeyup="filter()" type="search" id="default-search"
                               class="text-center w-64 text-sm rounded-lg border bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                               placeholder="Rechercher" required>
                    </div>
                </div>
            </div>

            <div class="mt-3 md:grid md:grid-cols-10 gap-2">
                <div></div>
                <div class="col-span-8 md:overflow-hidden overflow-x-scroll">
                    <table id="filterTable" class="col-span-2 text-sm text-left text-gray-40 md:w-full md:mx-4">
                        <thead class="text-xs uppercase bg-gray-700 text-gray-400 mt-4">
                        <tr>
                            <th class="py-3 px-6 text-center">
                                Objet
                            </th>
                            <th class="py-3 px-6 text-center">
                                Prix / Unité
                            </th>
                            <th class="py-3 px-6 text-center">
                                QTT
                            </th>
                            <th class="py-3 px-6 text-center">
                                Informations
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hdv as $item)
                            <tr class="border-b bg-gray-800 border-gray-700">
                                <td class="font-medium text-gray-300 bg-gray-800 text-center">
                                    <div class="flex flex-col  whitespace-normal max-w-xl">
                                        <div class="underline text-base">
                                            {{ $item->objet }}  @if($item->niveau !== null)
                                                + {{ $item->niveau }}
                                            @endif
                                        </div>
                                        <div class="text-yellow-200">
                                            @if($item->for !== null)
                                                FOR + {{ $item->for }}
                                            @endif
                                            @if($item->end !== null)
                                                END + {{ $item->end }}
                                            @endif
                                            @if($item->dex !== null)
                                                DEX + {{ $item->dex }}
                                            @endif
                                            @if($item->int !== null)
                                                INT + {{ $item->int }}
                                            @endif
                                        </div>
                                        <div class="text-blue-200">
                                            @if($item->feu !== null)
                                                FEU + {{ $item->feu }}
                                            @endif
                                            @if($item->eau !== null)
                                                EAU + {{ $item->eau }}
                                            @endif
                                            @if($item->vent !== null)
                                                VENT + {{ $item->vent }}
                                            @endif
                                            @if($item->foudre !== null)
                                                FOUDRE + {{ $item->foudre }}
                                            @endif
                                            @if($item->terre !== null)
                                                TERRE + {{ $item->terre }}
                                            @endif
                                        </div>
                                        <div class="text-red-200">
                                            @if($item->patk !== null)
                                                ATK {{ $item->patk }}%
                                            @endif
                                            @if($item->pdef !== null)
                                                DEF {{ $item->pdef }}%
                                            @endif
                                            @if($item->ppv !== null)
                                                PV {{ $item->ppv }}%
                                            @endif
                                            @if($item->pmp !== null)
                                                PM {{ $item->pmp }}%
                                            @endif
                                            @if($item->ppf !== null)
                                                PF {{ $item->ppf }}%
                                            @endif
                                        </div>
                                        <div class="text-pink-600">
                                            @if($item->eveil !== null)
                                                {{ $item->eveil }}
                                            @endif
                                        </div>
                                    </div>


                                </td>
                                <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ number_format($item->prix) }}</td>
                                <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->quantite }}</td>
                                <td class="font-medium text-gray-300 bg-gray-800 text-center">
                                    <div class="flex md:flex-row flex-col gap-1 md:gap-0 md:justify-center ">
                                        <button>
                                    <span
                                        class="text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-blue-200 text-blue-900">{{ $item->joueur }}</span>
                                        </button>
                                        @if($item->typeRequete == 1)
                                            <button>
                                        <span
                                            class="text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-green-200 text-green-900">Vente</span>
                                            </button>
                                        @else
                                            <button>
                                        <span
                                            class="text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-indigo-200 text-indigo-900">Achat</span>
                                            </button>
                                        @endif
                                        @if(auth()->user())
                                            @if(auth()->user()->id == $item->userId)
                                                <form autocomplete="off"
                                                      action="{{ route('hdvRemove', $item->id) }}"
                                                      method="POST">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit">
                                                    <span
                                                        class="text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-red-200 text-red-900">Supprimer</span>
                                                    </button>
                                                </form>
                                            @endif
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div></div>
            </div>


        </div>
    </div>

    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .popover__wrapper {
            position: relative;
        }

        .popover__content {
            opacity: 0;
            visibility: hidden;
            transform: translate(0, 10px);
        }

        .popover__content:before {
            transition-duration: 0.3s;
            transition-property: transform;
        }

        .popover__wrapper:hover .popover__content {
            z-index: 10;
            opacity: 1;
            visibility: visible;
            transform: translate(0, -20px);
        }
    </style>
    <script>
        function filter() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("filterInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("filterTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {

                td0 = tr[i].getElementsByTagName("td")[0];
                td1 = tr[i].getElementsByTagName("td")[1];
                td2 = tr[i].getElementsByTagName("td")[2];
                td3 = tr[i].getElementsByTagName("td")[3];
                if (td0) {
                    txtValue0 = td0.textContent || td0.innerText;
                    txtValue1 = td1.textContent || td1.innerText;
                    txtValue2 = td2.textContent || td2.innerText;
                    txtValue3 = td3.textContent || td3.innerText;
                    if (txtValue0.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        if (txtValue1.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            if (txtValue2.toUpperCase().indexOf(filter) > -1) {
                                tr[i].style.display = "";
                            } else {
                                if (txtValue3.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        }
                    }
                }
            }
        }
    </script>

@stop
