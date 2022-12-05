@extends('welcome')
@section('content')
    <script
        src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
    <script>
        var items = {!! json_encode($items) !!};
        iNames = [];
        items.forEach(element => iNames.push(element.nameFr));

        var icons = {!! json_encode($icons) !!};
        iIcons = [];
        icons.forEach(element => iIcons.push(element.icon));
    </script>
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
    @if(auth()->user())
        <div class="p-2 grid md:grid-cols-3 grid-cols-1">
            <form autocomplete="off" action="{{ route('hdvAdd') }}" class="col-span-2"
                  method="POST">
                @csrf
                <div class="flex flex-col gap-2">
                    <div class="flex flex-col">
                        <div class="flex gap-2">
                            <input checked type="radio" value="1" name="typeRequete">
                            <label for="default-radio-1" class="text-neutral-300">Je vend un objet</label>
                        </div>
                        <div class="flex gap-2">
                            <input type="radio" value="0" name="typeRequete">
                            <label for="default-radio-2" class="text-neutral-300">Je recherche un objet</label>
                        </div>
                    </div>
                    <div class="flex gap-1">d
                        <input required
                               class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                               type="search" name="objet" id="autoComplete"
                               dir="ltr" spellcheck=false autocorrect="off" placeholder="Nom de l'objet"
                               autocomplete="off" autocapitalize="off" tabindex="1">
                        <input
                            class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="text" name="joueur" value="@if(auth()->user()){{ auth()->user()->name }}@endif"
                            placeholder="Pseudo">
                    </div>
                    <div>
                        <input required
                               class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                               type="number" name="prix" placeholder="Prix">
                        <input required
                               class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                               type="number" name="quantite" placeholder="Quantité">
                        <input
                            class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="number" name="niveau" placeholder="Niveau d'amélioration" max="10">
                    </div>
                    <div class="text-neutral-300 flex flex-col">

                        <div>
                            <label>
                                For
                                <input type="radio" value="for" name="statRadio">
                            </label>
                            <label>
                                End
                                <input type="radio" value="end" name="statRadio">
                            </label>
                            <label>
                                Dex
                                <input type="radio" value="dex" name="statRadio">
                            </label>
                            <label>
                                Int
                                <input type="radio" value="int" name="statRadio">
                            </label>
                        </div>

                        <input
                            class="w-48 bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="number" name="statInput" max="4">

                    </div>
                    <div class="text-neutral-300 flex flex-col">

                        <div>
                            <label>
                                Eau
                                <input type="radio" value="eau" name="elementRadio">
                            </label>
                            <label>
                                Feu
                                <input type="radio" value="feu" name="elementRadio">
                            </label>
                            <label>
                                Terre
                                <input type="radio" value="terre" name="elementRadio">
                            </label>
                            <label>
                                Foudre
                                <input type="radio" value="foudre" name="elementRadio">
                            </label>
                            <label>
                                Vent
                                <input type="radio" value="foudre" name="elementRadio">
                            </label>
                        </div>

                        <input
                            class="w-48 bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="number" name="elementInput" max="10">
                    </div>
                    <div>
                        <input
                            class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="number" name="patk" placeholder="%ATK" max="28">
                        <input
                            class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="number" name="pdef" placeholder="%DEF" max="28">
                        <input
                            class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="number" name="ppv" placeholder="%PV" max="28">
                        <input
                            class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="number" name="pmp" placeholder="%PM" max="28">
                        <input
                            class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="number" name="ppf" placeholder="%PF" max="28">
                    </div>
                    <div>
                        <input
                            class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="text" name="eveil" placeholder="Eveil">
                    </div>

                    @if(auth()->user())
                        <input
                            class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                            type="text" name="userId" value="{{ auth()->user()->id }}" hidden>
                    @endif
                    <input
                        class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                        type="text" name="region" value="eu" hidden>
                    <input
                        class="bg-transparent border-neutral-300 text-neutral-300 font-bold focus:ring-neutral-200 focus:border-neutral-200"
                        type="text" name="serveur" value="genese" hidden>
                </div>
                <button type="submit"
                        class="mt-2 text-neutral-900 font-bold px-4 py-2 bg-white border border-neutral-300">
                    Valider
                </button>
            </form>
        </div>
    @else
        <div class="p-2 flex justify-center">
            <a class="text-neutral-200 text-xl animate-pulse hover:underline" href="login">Connectez vous pour ajouter
                un poste.</a>
        </div>
    @endif
    <div class="flex justify-center mt-4">
        <input
            id="searchbar" onkeyup="search_poste()"
            class="rounded-full bg-neutral-700 border border-neutral-600 placeholder:text-neutral-200 px-2 py-1 flex justify-center outline-none text-white"
            placeholder="Rechercher ...">
    </div>
    <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 grid-cols-1 p-4 gap-4">
        @foreach($hdv as $item)
            <div
                class="post list-none flex-col justify-evenly p-2 text-neutral-300 bg-neutral-800 rounded-xl border border-neutral-600">
                <div class="flex items-center justify-center gap-2">
                    <img id="icon-{{ $loop->index }}" src="#"
                         onerror="this.onerror=null; this.src='https://api.flyff.com/image/item/syssysquednawag.png'">
                    <div class="flex gap-1 text-neutral-200 font-semibold">
                        <div id="item-{{ $loop->index }}">{{ $item->objet }}</div>
                        <div>@if($item->niveau !== null)
                                + {{ $item->niveau }}
                            @endif</div>
                    </div>
                </div>
                @if(($item->prix == 1) OR ($item->prix == 0) OR ($item->prix == -1))
                    <div class="flex justify-center">Offre libre</div>
                @else
                    <div class="flex justify-center">{{ number_format($item->prix, 0, " ", " ") }} penyas</div>
                @endif
                <div class="flex gap-2 justify-center">
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
                </div>
                <div class="text-pink-600 text-center">
                    @if($item->eveil !== null)
                        {{ $item->eveil }}
                    @endif
                </div>
                <div class="flex justify-center">
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

                    <button>
                                    <span
                                        class="text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-blue-200 text-blue-900">{{ $item->joueur }}</span>
                    </button>

                    @if(auth()->user())
                        @if((auth()->user()->id == $item->userId) OR (auth()->user()->role == 2))
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
            </div>
            <script>
                function getImage(item) {
                    iNames.forEach(function callback(element, i) {
                        if (item.normalize("NFKD").replace(/[\u0300-\u036f]/g, "").toLowerCase() === element.normalize("NFKD").replace(/[\u0300-\u036f]/g, "").toLowerCase()) {
                            return document.getElementById(("icon-{!! $loop->index !!}")).src = "https://api.flyff.com/image/item/" + iIcons[i]
                        }
                    })
                }

                getImage(document.getElementById("item-{!! $loop->index !!}").textContent)
                console.log(document.getElementById("item-{!! $loop->index !!}").textContent)
            </script>
        @endforeach
        <script
            src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>
        <script>



            const autoCompleteJS = new autoComplete({
                data: {
                    src: iNames,
                    cache: true,
                },
                resultItem: {
                    highlight: true
                },
                events: {
                    input: {
                        selection: (event) => {
                            const selection = event.detail.selection.value;
                            autoCompleteJS.input.value = selection;
                            iNames.forEach(function callback(element, i) {
                                if (selection === element) {
                                    document.getElementById(('autoCompleteId')).value = i
                                    document.getElementById(('autoCompleteIcon')).src = "https://api.flyff.com/image/item/" + iIcons[i]
                                    console.log(iIcons)
                                    console.log(itemNames)
                                }
                            })


                        }
                    }
                }
            });

        </script>
    </div>
    <style>
        #autoComplete_list_1 {
            width: 13em;
            background-color: white;
            position: fixed;
            border-bottom-left-radius: 0.4em;
            border-bottom-right-radius: 0.4em;
        }

        #autoComplete_list_1:hover {
            cursor: pointer;
        }

        #autoComplete_result_0:hover {
            background-color: #9ca3af;
            border-bottom-left-radius: 0.4em;
            border-bottom-right-radius: 0.4em;
        }

        #autoComplete_result_1:hover {
            background-color: #9ca3af;
            border-bottom-left-radius: 0.4em;
            border-bottom-right-radius: 0.4em;
        }

        #autoComplete_result_2:hover {
            background-color: #9ca3af;
            border-bottom-left-radius: 0.4em;
            border-bottom-right-radius: 0.4em;
        }

        #autoComplete_result_3:hover {
            background-color: #9ca3af;
            border-bottom-left-radius: 0.4em;
            border-bottom-right-radius: 0.4em;
        }

        #autoComplete_result_4:hover {
            background-color: #9ca3af;
            border-bottom-left-radius: 0.4em;
            border-bottom-right-radius: 0.4em;
        }

        mark {
            background-color: rgba(94, 154, 186, 0.32);
        }
    </style>

    <script>
        var rules = {
            a: "àáâãäå",
            A: "ÀÁÂ",
            e: "èéêë",
            E: "ÈÉÊË",
            i: "ìíîï",
            I: "ÌÍÎÏ",
            o: "òóôõöø",
            O: "ÒÓÔÕÖØ",
            u: "ùúûü",
            U: "ÙÚÛÜ",
            y: "ÿ",
            c: "ç",
            C: "Ç",
            n: "ñ",
            N: "Ñ"
        };

        function getJSONKey(key) {
            for (acc in rules) {
                if (rules[acc].indexOf(key) > -1) {
                    return acc
                }
            }
        }

        function replaceSpec(Texte) {
            regstring = ""
            for (acc in rules) {
                regstring += rules[acc]
            }
            reg = new RegExp("[" + regstring + "]", "g")
            return Texte.replace(reg, function (t) {
                return getJSONKey(t)
            });
        }


        // JavaScript code
        function search_poste() {
            let input = replaceSpec(document.getElementById('searchbar').value.toLowerCase())
            let x = document.getElementsByClassName('post');

            for (i = 0; i < x.length; i++) {

                if (!replaceSpec(x[i].innerHTML).toLowerCase().includes(input)) {
                    x[i].style.display = "none";
                } else {
                    x[i].style.display = "list-item";
                }
            }
        }
    </script>

    <style>
        ::-webkit-scrollbar {
            width: 0.2em;
            background-color: rgba(255, 255, 255, 0.30);
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.60);
            border-radius: 10em;
        }

    </style>

@stop
