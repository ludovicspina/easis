@extends('welcome')
@section('content')


    @if(Auth::user())
        <form action="{{ route('cdgAdd') }}" class="mt-4" method="POST">
            @csrf
            <div class="grid md:grid-cols-3 md:gap-6">
                <div class="relative z-0 mb-6 w-48 group">
                    <input type="text" name="objet" id="floating_first_name"
                           class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" " required/>
                    <label for="floating_first_name"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom
                        de l'objet</label>
                </div>
                <div class="relative z-0 mb-6 w-48 group">
                    <input type="text" name="joueur" id="floating_last_name"
                           class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                           placeholder=" " required/>
                    <label for="floating_last_name"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Joueur</label>
                </div>
            </div>
            <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Valider
            </button>
        </form>
    @endif

    <div class="relative sm:rounded-lg grid md:grid-cols-3">
        <table class="w-full text-sm text-left text-gray-400 mx-4">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900">
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Liste des objets distribués durant les Clockworks et Meteonyker.</p>
            </caption>
            <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Objet
                </th>
                <th scope="col" class="py-3 px-6">
                    Joueur
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($cdgList as $cdg)
                <tr class="bg-white border-b bg-gray-800 border-gray-700">
                    <td scope="row"
                        class="py-4 px-6 font-medium text-gray-300 bg-gray-800 text-gray-900 whitespace-nowrap">{{ $cdg->joueur }}</td>
                    <td class="py-4 px-6 text-gray-300 bg-gray-800 text-gray-900">{{ $cdg->objet }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <table class="w-full text-sm text-left text-gray-400 mx-4">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900">
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Quantité d'objet par personne.</p>
            </caption>
            <thead class="text-xs uppercase bg-gray-700 text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Joueur
                </th>
                <th scope="col" class="py-3 px-6">
                    Quantité
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($cdgIteration as $cdg)
                <tr class="bg-white border-b bg-gray-800 border-gray-700">
                    <td scope="row"
                        class="py-4 px-6 font-medium text-gray-300 bg-gray-800 text-gray-900 whitespace-nowrap">{{ $cdg->joueur }}</td>
                    <td class="py-4 px-6 text-gray-300 bg-gray-800 text-gray-900">{{ $cdg->count }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



    <div>

    </div>






@stop