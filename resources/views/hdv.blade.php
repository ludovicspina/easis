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
                    <a href="{{route('hdv')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Hotel de vente</a>
                </div>
            </li>
        </ol>
    </nav>



    <div class="mb-4 flex justify-center mx-10">
        <ul class="flex md:flex-wrap -mb-px text-xl font-medium text-center" id="myTab" data-tabs-toggle="#serverTab"
            role="tablist">
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:border-gray-300 hover:text-gray-300"
                    id="genese-tab" data-tabs-target="#genese" type="button" role="tab" aria-controls="genese"
                    aria-selected="false">Genese
                </button>
            </li>
        </ul>
    </div>

    <div id="serverTab">
        <div class="hidden p-4 rounded-lg" id="genese" role="tabpanel"
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
                                                <input type="number" name="quantite" id="quantite"
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

            <div class="text-center text-gray-300 mt-3">Ce site est acceccible à tous, si vous ne le respectez pas
                il
                disparaîtra rapidement.
            </div>
            <div class="text-center text-gray-300 mt-1">Soyez respectueux et ayez du savoir vivre.</div>
            <div class="text-center text-gray-300 mt-2">Pour toute réclamation/idée/proposition contactez moi sur
                discord : pamp1n#7133
            </div>
            <div class="flex justify-center mt-4"><!-- Modal toggle -->
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
                        Connecter vous pour ajouter un objet
                    </div>
                @endif
            </div>
            <div class="mt-3 md:grid md:grid-cols-10 gap-2">
                <div></div>
                <div class="col-span-8 md:overflow-hidden overflow-x-scroll">
                    <table class="col-span-2 text-sm text-left text-gray-40 md:w-full md:mx-4">
                        <caption class="p-5 mb-8 md:mb-0 text-lg font-semibold text-left text-gray-900 h-16 mt-6">
                            <p class="mt-1 md:text-xl font-normal text-center text-gray-300">Liste des objets qui
                                sont
                                actuellement recherchés.</p>
                        </caption>
                        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th class="py-3 px-6 text-center">

                            </th>
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
                                Joueur
                            </th>
                            <th class="py-3 px-6 text-center">
                                Type de requete
                            </th>
                            @if(auth()->user())
                                <th class="py-3 px-6 text-center">Action</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hdv as $item)
                            <tr class="border-b bg-gray-800 border-gray-700">
                                <td class="popover__wrapper font-medium text-gray-300 bg-gray-800 text-center">
                                    <button type="button" data-popover-target="{{ $item->id }}"
                                            class="text-white focus:outline-none font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 bg-transparent focus:ring-blue-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                                        </svg>

                                        <span class="sr-only">Icon description</span>
                                    </button>
                                    <div data-popover id="{{ $item->id }}" role="tooltip"
                                         class="popover__content inline-block absolute z-10 text-sm font-light rounded-lg border shadow-sm opacity-0 transition-opacity duration-300 text-gray-400 border-gray-600 bg-gray-800">
                                        <div
                                            class="py-2 px-3 bg-gray-100 rounded-t-lg border-b border-gray-200 dark:border-gray-600 dark:bg-gray-700">
                                            <h3 class="font-semibold text-gray-900 dark:text-white">{{ $item->objet }}@if($item->niveau !== null)
                                                    + {{ $item->niveau }} @endif</h3>
                                        </div>
                                        <div class="flex px-2 py-1 gap-4 text-base border-b border-gray-600">
                                            @if($item->for !== null)
                                                <p class="text-green-400">FOR+{{ $item->for }}</p>
                                            @endif
                                            @if($item->end !== null)
                                                <p class="text-red-400">END+{{ $item->end }}</p>
                                            @endif
                                            @if($item->dex !== null)
                                                <p class="text-yellow-400">DEX+{{ $item->dex }}</p>
                                            @endif
                                            @if($item->int !== null)
                                                <p class="text-magenta-400">INT+{{ $item->int }}</p>
                                            @endif
                                        </div>
                                        <div class="flex px-2 py-1 gap-4 text-base">
                                            @if($item->eau !== null)
                                                <p class="text-blue-500">Eau+{{ $item->eau }}</p>
                                            @endif
                                            @if($item->feu !== null)
                                                <p class="text-orange-500">Feu+{{ $item->feu }}</p>
                                            @endif
                                            @if($item->terre !== null)
                                                <p class="text-orange-800">Terre+{{ $item->terre }}</p>
                                            @endif
                                            @if($item->foudre !== null)
                                                <p class="text-yellow-500">Foudre+{{ $item->foudre }}</p>
                                            @endif
                                            @if($item->vent !== null)
                                                <p class="text-cyan-500">Vent+{{ $item->vent }}</p>
                                            @endif
                                        </div>
                                        @if($item->eveil !== null)
                                            <div class="flex px-2 py-1 gap-4 text-base">
                                                <p class="text-purple-400">Eveil : {{ $item->eveil }}</p>
                                            </div>
                                        @endif
                                        <div></div>
                                    </div>
                                </td>
                                <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->objet }}@if($item->niveau !== null)
                                        + {{ $item->niveau }} @endif</td>
                                <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ number_format($item->prix) }}</td>
                                <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->quantite }}</td>
                                <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->joueur }}</td>
                                <td class="font-medium text-gray-300 bg-gray-800 text-center">@if($item->typeRequete == 1)
                                        <div class="text-blue-400">Achat</div> @else
                                        <div class="text-green-400">Vente</div> @endif </td>
                                @if(auth()->user())
                                    @if(auth()->user()->id == $item->userId)
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">
                                            <form autocomplete="off"
                                                  action="{{ route('hdvRemove', $item->id) }}"
                                                  class="col-span-1 w-auto mt-4"
                                                  method="POST">
                                                @csrf
                                                @method('put')
                                                <button type="submit">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    @endif
                                @endif
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
@stop
