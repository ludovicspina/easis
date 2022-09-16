@extends('welcome')
@section('content')





    <div class="mb-4 flex justify-center mx-10 md:border-b border-gray-700">
        <ul class="md:flex md:flex-wrap -mb-px text-xl font-medium text-center" id="myTab" data-tabs-toggle="#serverTab"
            role="tablist">
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:border-gray-300 hover:text-gray-300"
                    id="genese-tab" data-tabs-target="#genese" type="button" role="tab" aria-controls="genese"
                    aria-selected="false">Genese
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:border-gray-300 hover:text-gray-300"
                    id="totemia-tab" data-tabs-target="#totemia" type="button" role="tab" aria-controls="totemia"
                    aria-selected="false">Totemia
                </button>
            </li>
            <li class="mr-2" role="presentation">
                <button
                    class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:border-gray-300 hover:text-gray-300"
                    id="burudeng-tab" data-tabs-target="#burudeng" type="button" role="tab" aria-controls="burudeng"
                    aria-selected="false">Burudeng
                </button>
            </li>
        </ul>
    </div>
    <div id="serverTab">
        <div class="hidden p-4 bg-gray-50 rounded-lg  bg-gray-800" id="genese" role="tabpanel"
             aria-labelledby="genese-tab">
            <div class="text-2xl text-center text-gray-300 mt-6 underline">Toutes les offres disparaissent
                automatiquement au bout de 24h.
            </div>
            <div class="text-center text-gray-300 mt-3">Ce site est acceccible à tous, si vous ne le respectez pas il
                disparaîtra rapidement.
            </div>
            <div class="text-center text-gray-300 mt-1">Soyez respectueux et ayez du savoir vivre.</div>
            <div class="text-center text-gray-300 mt-2">Pour toute réclamation/idée/proposition contactez moi sur
                discord : pamp1n#7133
            </div>

            <div class="md:grid md:grid-cols-8 gap-2">
                <form autocomplete="off" action="{{ route('hdvAdd') }}" class="col-span-1 w-auto mt-4" method="POST">
                    @csrf
                    <div class="mt-8 md:flex md:flex-col">
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
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="text" name="objet" id="objet"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Objet
                                à vendre</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="number" name="quantite" id="quantite"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantité</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="number" name="prix" id="prix"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prix</label>
                        </div>

                        <div><input name="region" type="hidden" value="eu"></div>
                        <div><input name="serveur" type="hidden" value="genese"></div>
                    </div>
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-80 sm:w-auto px-5 py-2.5 text-center">
                        Valider
                    </button>
                </form>
                <div class="col-span-3">
                    <table class="text-sm text-left text-gray-400 w-full md:mx-4">
                        <caption class="p-5 mb-8 md:mb-0 text-lg font-semibold text-left text-gray-900 h-16 mt-6">
                            <p class="mt-1 md:text-xl font-normal text-center text-gray-300">Liste des objets qui sont
                                actuellement en vente.</p>
                        </caption>
                        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th class="py-3 px-6 text-center">
                                Objet
                            </th>
                            <th class="py-3 px-6 text-center">
                                Prix / Unité
                            </th>
                            <th class="py-3 px-6 text-center">
                                Quantité
                            </th>
                            <th class="py-3 px-6 text-center">
                                Joueur
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hdv as $item)
                            @if($item->typeRequete === 1)
                                @if($item->serveur === "genese")
                                    <tr class="bg-white border-b bg-gray-800 border-gray-700">
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->objet }}</td>
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ number_format($item->prix) }}</td>
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->quantite }}</td>
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->joueur }}</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-span-3">
                    <table class="col-span-2 text-sm text-left text-gray-400  w-full md:mx-4">
                        <caption class="p-5 mb-8 md:mb-0 text-lg font-semibold text-left text-gray-900 h-16 mt-6">
                            <p class="mt-1 md:text-xl font-normal text-center text-gray-300">Liste des objets qui sont
                                actuellement recherchés.</p>
                        </caption>
                        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th class="py-3 px-6 text-center">
                                Objet
                            </th>
                            <th class="py-3 px-6 text-center">
                                Prix / Unité
                            </th>
                            <th class="py-3 px-6 text-center">
                                Quantité
                            </th>
                            <th class="py-3 px-6 text-center">
                                Joueur
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hdv as $item)
                            @if($item->typeRequete === 0)
                                @if($item->serveur === "genese")
                                    <tr class="bg-white border-b bg-gray-800 border-gray-700">
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->objet }}</td>
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ number_format($item->prix) }}</td>
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->quantite }}</td>
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->joueur }}</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="hidden p-4 rounded-lg bg-gray-800" id="totemia" role="tabpanel"
             aria-labelledby="totemia-tab">
            <div class="text-2xl text-center text-gray-300 mt-6 underline">All offers disappear automatically after 24
                hours.
            </div>
            <div class="text-center text-gray-300 mt-3">This site is acceccible for all, if you do not respect it it
                will disappear quickly.
            </div>
            <div class="text-center text-gray-300 mt-1">Be respectful and know how to live.</div>
            <div class="text-center text-gray-300 mt-2">For any complaint/idea/proposal contact me on discord:
                pamp1n#7133
            </div>

            <div class="md:grid md:grid-cols-8 gap-2">
                <form autocomplete="off" action="{{ route('hdvAdd') }}" class="col-span-1 w-auto mt-4" method="POST">
                    @csrf
                    <div class="mt-8 md:flex md:flex-col">
                        <div class="flex flex-col mb-4">
                            <div>
                                <input checked type="radio" value="1" name="typeRequete"
                                       class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                <label for="default-radio-1"
                                       class="ml-2 text-sm font-medium text-gray-300">I sell an
                                    item</label>
                            </div>
                            <div>
                                <input type="radio" value="0" name="typeRequete"
                                       class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                <label for="default-radio-2"
                                       class="ml-2 text-sm font-medium text-gray-300">
                                    I'm looking for a item</label>
                            </div>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="text" name="joueur" id="joueur"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_last_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">IGN
                            </label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="text" name="objet" id="objet"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Item
                                for sale</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="number" name="quantite" id="quantite"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantity</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="number" name="prix" id="prix"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Price</label>
                        </div>

                        <div><input name="region" type="hidden" value="eu"></div>
                        <div><input name="serveur" type="hidden" value="totemia"></div>
                    </div>
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-80 sm:w-auto px-5 py-2.5 text-center">
                        Done
                    </button>
                </form>
                <div class="col-span-3">
                    <table class="text-sm text-left text-gray-400 w-full md:mx-4">
                        <caption class="p-5 mb-8 md:mb-0 text-lg font-semibold text-left text-gray-900 h-16 mt-6">
                            <p class="mt-1 md:text-xl font-normal text-center text-gray-300">List of items that are
                                currently on sale.</p>
                        </caption>
                        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th class="py-3 px-6 text-center">
                                Item
                            </th>
                            <th class="py-3 px-6 text-center">
                                Price / Unity
                            </th>
                            <th class="py-3 px-6 text-center">
                                Quantity
                            </th>
                            <th class="py-3 px-6 text-center">
                                IGN
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hdv as $item)
                            @if($item->typeRequete === 1)
                                @if($item->serveur === "totemia")
                                    <tr class="bg-white border-b bg-gray-800 border-gray-700">
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->objet }}</td>
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ number_format($item->prix) }}</td>
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->quantite }}</td>
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->joueur }}</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-span-3">
                    <table class="col-span-2 text-sm text-left text-gray-400  w-full md:mx-4">
                        <caption class="p-5 mb-8 md:mb-0 text-lg font-semibold text-left text-gray-900 h-16 mt-6">
                            <p class="mt-1 md:text-xl font-normal text-center text-gray-300">List of items that are
                                currently wanted.</p>
                        </caption>
                        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th class="py-3 px-6 text-center">
                                Item
                            </th>
                            <th class="py-3 px-6 text-center">
                                Price / Unity
                            </th>
                            <th class="py-3 px-6 text-center">
                                Quantity
                            </th>
                            <th class="py-3 px-6 text-center">
                                IGN
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hdv as $item)
                            @if($item->typeRequete === 0)
                                @if($item->serveur === "totemia")
                                    <tr class="bg-white border-b bg-gray-800 border-gray-700">
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->objet }}</td>
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ number_format($item->prix) }}</td>
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->quantite }}</td>
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->joueur }}</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-800" id="burudeng" role="tabpanel"
             aria-labelledby="burudeng-tab">
            <div class="text-2xl text-center text-gray-300 mt-6 underline">Alle Angebote verschwinden
                automatisch nach 24 Stunden.
            </div>
            <div class="text-center text-gray-300 mt-3">Diese Seite ist für alle zugänglich, wenn Sie sie nicht
                respektieren
                wird schnell verschwinden.
            </div>
            <div class="text-center text-gray-300 mt-1">Sei respektvoll und weiß, wie man lebt.</div>
            <div class="text-center text-gray-300 mt-2">Für jede Beschwerde/Idee/Vorschlag kontaktieren Sie mich unter
                Zwietracht: pamp1n#7133
            </div>

            <div class="md:grid md:grid-cols-8 gap-2">
                <form autocomplete="off" action="{{ route('hdvAdd') }}" class="col-span-1 w-auto mt-4" method="POST">
                    @csrf
                    <div class="mt-8 md:flex md:flex-col">
                        <div class="flex flex-col mb-4">
                            <div>
                                <input checked type="radio" value="1" name="typeRequete"
                                       class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                <label for="default-radio-1"
                                       class="ml-2 text-sm font-medium text-gray-300">Ich verkaufe
                                    ein
                                    Objekt</label>
                            </div>
                            <div>
                                <input type="radio" value="0" name="typeRequete"
                                       class="w-4 h-4 text-blue-600 focus:ring-blue-600 ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                                <label for="default-radio-2"
                                       class="ml-2 text-sm font-medium text-gray-900 text-gray-300">Ich suche eine
                                    Objekt</label>
                            </div>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="text" name="joueur" id="joueur"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_last_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">IGN</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="text" name="objet" id="objet"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Objekt
                                zu verkaufen</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="number" name="quantite" id="quantite"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Menge</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="number" name="prix" id="prix"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                                Preis</label>
                        </div>

                        <div><input name="region" type="hidden" value="eu"></div>
                        <div><input name="serveur" type="hidden" value="burudeng"></div>
                    </div>
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-80 sm:w-auto px-5 py-2.5 text-center">
                        Bestätigen
                    </button>
                </form>
                <div class="col-span-3">
                    <table class="text-sm text-left text-gray-400 w-full md:mx-4">
                        <caption class="p-5 mb-8 md:mb-0 text-lg font-semibold text-left text-gray-900 h-16 mt-6">
                            <p class="mt-1 md:text-xl font-normal text-center text-gray-300">Liste der Objekte, die sind
                                derzeit im Angebot.</p>
                        </caption>
                        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th class="py-3 px-6 text-center">
                                Objekt
                            </th>
                            <th class="py-3 px-6 text-center">
                                Prix / Einheit
                            </th>
                            <th class="py-3 px-6 text-center">
                                Menge
                            </th>
                            <th class="py-3 px-6 text-center">
                                Spieler
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hdv as $item)
                            @if($item->typeRequete === 1)
                                @if($item->serveur === "burudeng")
                                    <tr class="bg-white border-b bg-gray-800 border-gray-700">
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->objet }}</td>
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ number_format($item->prix) }}</td>
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->quantite }}</td>
                                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->joueur }}</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-span-3">
                    <table class="col-span-2 text-sm text-left text-gray-400  w-full md:mx-4">
                        <caption class="p-5 mb-8 md:mb-0 text-lg font-semibold text-left text-gray-900 h-16 mt-6">
                            <p class="mt-1 md:text-xl font-normal text-center text-gray-300">
                                Liste der Objekte, die sind
                                derzeit gesucht.</p>
                        </caption>
                        <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                        <tr>
                            <th class="py-3 px-6 text-center">
                                Objekt
                            </th>
                            <th class="py-3 px-6 text-center">
                                Prix / Einheit
                            </th>
                            <th class="py-3 px-6 text-center">
                                Menge
                            </th>
                            <th class="py-3 px-6 text-center">
                                Spieler
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($hdv as $item)
                            @if($item->typeRequete === 0)
                                @if($item->serveur === "burudeng")
                                    <tr class="bg-white border-b bg-gray-800 border-gray-700">
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->objet }}</td>
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ number_format($item->prix) }}</td>
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->quantite }}</td>
                                        <td class="font-medium text-gray-300 bg-gray-800 text-center">{{ $item->joueur }}</td>
                                    </tr>
                                @endif
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
