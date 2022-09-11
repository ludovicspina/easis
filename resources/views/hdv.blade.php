@extends('welcome')
@section('content')


    <div class="text-2xl text-center text-gray-300 mt-6 underline">Toutes les offres disparaissent automatiquement au bout de 24h.</div>
    <div class="text-xl text-center text-gray-300 mt-4 underline">HDV Genèse.</div>
    <div class="text-center text-gray-300 mt-3">Ce site est acceccible à tous, si vous ne le respectez pas il disparaîtra rapidement.</div>
    <div class="text-center text-gray-300 mt-1">Soyez respectueux et ayez du savoir vivre.</div>
    <div class="text-center text-gray-300 mt-2">Pour toute réclamation/idée/proposition contactez moi sur discord : pamp1n#7133</div>



    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="md:mx-16 mt-8">
            <div class="flex justify-center">
                <form autocomplete="off" action="{{ route('hdvOAdd') }}" class="w-auto mt-4" method="POST">
                    @csrf
                    <div class="underline text-2xl text-center text-gray-300">Je vend un objet</div>
                    <div class="md:gap-6 mt-8 md:flex">
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="text" name="joueurOffre" id="joueurOffre"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_last_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pseudo IG</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="text" name="objetOffre" id="objetOffre"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Objet à vendre</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="number" name="quantiteOffre" id="quantiteOffre"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantité</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="number" name="prixOffre" id="prixOffre"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prix</label>
                        </div>
                    </div>
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-64 md:w-full sm:w-auto px-5 py-2.5 text-center">
                        Valider
                    </button>
                </form>
            </div>
            <div>
                <table class="text-sm text-left text-gray-400 w-full md:mx-4">
                    <caption class="p-5 mb-8 md:mb-0 text-lg font-semibold text-left text-gray-900 h-16 mt-6">
                        <p class="mt-1 md:text-xl font-normal text-center text-gray-300">Liste des objets qui sont actuellement en vente.</p>
                    </caption>
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6 text-center">
                            Objet
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Prix / Unité
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Quantité
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Joueur
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hdvO as $item)
                        <tr class="bg-white border-b bg-gray-800 border-gray-700">
                            <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->objetOffre }}</td>
                            <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ number_format($item->prixOffre) }}</td>
                            <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->quantiteOffre }}</td>
                            <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->joueurOffre }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="md:mx-16 mt-8">
            <div class="flex justify-center">
                <form autocomplete="off" action="{{ route('hdvRAdd') }}" class="w-auto mt-4" method="POST">
                    @csrf
                    <div class="underline text-2xl text-center text-gray-300">Je recherche un objet</div>
                    <div class="md:gap-6 mt-8 md:flex">
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="text" name="joueurRecherche" id="joueurRecherche"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_last_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Pseudo IG</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="text" name="objetRecherche" id="objetRecherche"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Objet recherché</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="number" name="prixRecherche" id="prixRecherche"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prix</label>
                        </div>
                        <div class="relative z-0 mb-6 w-48 group">
                            <input type="number" name="quantiteRecherche" id="quantiteRecherche"
                                   class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" " required/>
                            <label for="floating_first_name"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Quantité</label>
                        </div>
                    </div>
                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                        Valider
                    </button>
                </form>
            </div>
            <div>
                <table class="text-sm text-left text-gray-400 w-full md:mx-4">
                    <caption class="p-5 mb-8 md:mb-0 text-lg font-semibold text-left text-gray-900 h-16 mt-6">
                        <p class="mt-1 md:text-xl font-normal text-center text-gray-300">Liste des objets qui sont actuellement recherchés.</p>
                    </caption>
                    <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6 text-center">
                            Objet
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Prix / Unité
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Quantité
                        </th>
                        <th scope="col" class="py-3 px-6 text-center">
                            Joueur
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($hdvR as $item)
                        <tr class="bg-white border-b bg-gray-800 border-gray-700">
                            <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->objetRecherche }}</td>
                            <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ number_format($item->prixRecherche) }}</td>
                            <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->quantiteRecherche }}</td>
                            <td class="h-4 font-medium text-gray-300 bg-gray-800 text-center">{{ $item->joueurRecherche }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>

        numberO =

        function numberWithSpaces(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
        }
    </script>

@stop
