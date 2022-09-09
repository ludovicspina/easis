@extends('welcome')
@section('content')






    <div>
        <div class="grid md:grid-cols-4">
            @if(Auth::user())
                <div class="mt-8 flex flex-col">
                    <div class="flex justify-center">
                        <form autocomplete="off" action="{{ route('cdgAdd') }}" class="w-auto mt-4" method="POST">
                            @csrf
                            <div class="underline text-gray-400">Ajouter une archive :</div>
                            <div class="md:gap-6 mt-8 flex">
                                <div class="relative z-0 mb-6 w-48 group">
                                    <input type="text" name="joueur" id="joueur"
                                           class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                           placeholder=" " required/>
                                    <label for="floating_last_name"
                                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Joueur</label>
                                </div>
                                <div class="relative z-0 mb-6 w-48 group">
                                    <input type="text" name="objet" id="objet"
                                           class="block py-2.5 px-0 w-full text-sm text-gray-200 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                           placeholder=" " required/>
                                    <label for="floating_first_name"
                                           class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom
                                        de l'objet</label>
                                </div>
                            </div>
                            <button type="submit"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                                Valider
                            </button>
                        </form>
                    </div>

                    @if(session('status'))
                        <div
                            class="flex p-4 ml-4 mt-96 opacity-50 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800"
                            role="alert">
                            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">{{ session('status') }}</span>
                            </div>
                        </div>
                    @endif
                </div>
            @endif

            <table class="text-sm text-left text-gray-400 w-96 mx-4">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 h-24">
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Liste des objets distribués
                        durant les Clockworks et Meteonyker.</p>
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
                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-gray-900">{{ $cdg->joueur }}</td>
                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-gray-900">{{ $cdg->objet }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <table class="w-96 text-sm text-left text-gray-400 mx-4">
                <caption class="p-5 text-lg font-semibold text-left text-gray-900 h-24">
                    <p class="mt-1 text-sm font-normal text-gray-500 dark:text-gray-400">Quantité d'objet par
                        personne.</p>
                </caption>
                <thead class="text-xs uppercase bg-gray-700 text-gray-400">
                <tr>
                    <th class="py-3 px-6">
                        Joueur
                    </th>
                    <th class="py-3 px-6">
                        Quantité
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($cdgIteration as $cdg)
                    <tr class="bg-white border-b bg-gray-800 border-gray-700">
                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-gray-900">{{ $cdg->joueur }}</td>
                        <td class="h-4 font-medium text-gray-300 bg-gray-800 text-gray-900">{{ $cdg->count }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <style>
            .autocomplete-items {
                position: absolute;
                border: 1px solid #d4d4d4;
                border-bottom: none;
                border-top: none;
                z-index: 99;
                /*position the autocomplete items to be the same width as the container:*/
                top: 100%;
                left: 0;
                right: 0;
            }

            .autocomplete-items div {
                padding: 10px;
                cursor: pointer;
                background-color: #fff;
                border-bottom: 1px solid #d4d4d4;
            }

            .autocomplete-items div:hover {
                /*when hovering an item:*/
                background-color: #e9e9e9;
            }

            .autocomplete-active {
                /*when navigating through the items using the arrow keys:*/
                background-color: DodgerBlue !important;
                color: #ffffff;
            }</style>

        <script>


            var clockItemList = {!! json_encode($clockItemsJson) !!};

            var meteoItemList = {!! json_encode($meteoItemsJson) !!};

            var cdg = {!! json_encode($cdgIteration) !!};
            var joueurs = [];

            cNames= [];
            mNames= [];

            clockItemList.forEach(element => cNames.push(element.name.fr));
            meteoItemList.forEach(element => mNames.push(element.name.fr));

            let itemNames = [];

            for(let i=0;i<cNames.length;i++){
                if(itemNames.indexOf(cNames[i]) == -1)
                    itemNames.push(cNames[i])
            }
            for(let i=0;i<mNames.length;i++){
                if(itemNames.indexOf(mNames[i]) == -1)
                    itemNames.push(mNames[i])
            }



            cdg.forEach(element => joueurs.push(element.joueur));


            function autocomplete(inp, arr) {
                /*the autocomplete function takes two arguments,
                the text field element and an array of possible autocompleted values:*/
                var currentFocus;
                /*execute a function when someone writes in the text field:*/
                inp.addEventListener("input", function (e) {
                    var a, b, i, val = this.value;
                    /*close any already open lists of autocompleted values*/
                    closeAllLists();
                    if (!val) {
                        return false;
                    }
                    currentFocus = -1;
                    /*create a DIV element that will contain the items (values):*/
                    a = document.createElement("DIV");
                    a.setAttribute("id", this.id + "autocomplete-list");
                    a.setAttribute("class", "autocomplete-items");
                    /*append the DIV element as a child of the autocomplete container:*/
                    this.parentNode.appendChild(a);
                    /*for each item in the array...*/
                    for (i = 0; i < arr.length; i++) {
                        /*check if the item starts with the same letters as the text field value:*/
                        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                            /*create a DIV element for each matching element:*/
                            b = document.createElement("DIV");
                            /*make the matching letters bold:*/
                            b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                            b.innerHTML += arr[i].substr(val.length);
                            /*insert a input field that will hold the current array item's value:*/
                            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                            /*execute a function when someone clicks on the item value (DIV element):*/
                            b.addEventListener("click", function (e) {
                                /*insert the value for the autocomplete text field:*/
                                inp.value = this.getElementsByTagName("input")[0].value;
                                /*close the list of autocompleted values,
                                (or any other open lists of autocompleted values:*/
                                closeAllLists();
                            });
                            a.appendChild(b);
                        }
                    }
                });
                /*execute a function presses a key on the keyboard:*/
                inp.addEventListener("keydown", function (e) {
                    var x = document.getElementById(this.id + "autocomplete-list");
                    if (x) x = x.getElementsByTagName("div");
                    if (e.keyCode == 40) {
                        /*If the arrow DOWN key is pressed,
                        increase the currentFocus variable:*/
                        currentFocus++;
                        /*and and make the current item more visible:*/
                        addActive(x);
                    } else if (e.keyCode == 38) { //up
                        /*If the arrow UP key is pressed,
                        decrease the currentFocus variable:*/
                        currentFocus--;
                        /*and and make the current item more visible:*/
                        addActive(x);
                    } else if (e.keyCode == 13) {
                        /*If the ENTER key is pressed, prevent the form from being submitted,*/
                        e.preventDefault();
                        if (currentFocus > -1) {
                            /*and simulate a click on the "active" item:*/
                            if (x) x[currentFocus].click();
                        }
                    }
                });

                function addActive(x) {
                    /*a function to classify an item as "active":*/
                    if (!x) return false;
                    /*start by removing the "active" class on all items:*/
                    removeActive(x);
                    if (currentFocus >= x.length) currentFocus = 0;
                    if (currentFocus < 0) currentFocus = (x.length - 1);
                    /*add class "autocomplete-active":*/
                    x[currentFocus].classList.add("autocomplete-active");
                }

                function removeActive(x) {
                    /*a function to remove the "active" class from all autocomplete items:*/
                    for (var i = 0; i < x.length; i++) {
                        x[i].classList.remove("autocomplete-active");
                    }
                }

                function closeAllLists(elmnt) {
                    /*close all autocomplete lists in the document,
                    except the one passed as an argument:*/
                    var x = document.getElementsByClassName("autocomplete-items");
                    for (var i = 0; i < x.length; i++) {
                        if (elmnt != x[i] && elmnt != inp) {
                            x[i].parentNode.removeChild(x[i]);
                        }
                    }
                }

                /*execute a function when someone clicks in the document:*/
                document.addEventListener("click", function (e) {
                    closeAllLists(e.target);
                });
            }

            autocomplete(document.getElementById("objet"), itemNames);
            autocomplete(document.getElementById("joueur"), joueurs);
        </script>



@stop
