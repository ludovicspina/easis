@extends('welcome')
@section('content')



    <div class="overflow-x-auto relative sm:rounded-lg grid md:grid-cols-3">
        <table class="w-full text-sm text-left text-gray-400 mx-4">
            <caption class="p-5 text-lg font-semibold text-left text-gray-900">
                <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Liste des objets distribués durant les Clockworks et Meteonyker.</p>
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
    </div>









    @if(session('status'))
        <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">{{ session('status') }}</span>
            </div>
        </div>
    @endif

@stop
