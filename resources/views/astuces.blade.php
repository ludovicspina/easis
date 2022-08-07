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
                    <a href="{{route('astuces')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Astuces</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="flex flex-col">
        <div class="flex justify-center mt-16 text-neutral-200">
            <div class="flex flex-col">
                <div class="text-4xl text-center md:text-6xl font-bold">Astuces générales</div>
                <div class="text-xl text-center px-2 md:px-0 mt-6 text-neutral-300">Voici une liste de différentes
                    astuces qui vous aideront
                    durant le jeu.
                </div>
            </div>

        </div>
        <div class="flex justify-center mt-6">
            <div id="accordion-flush" class="flex flex-col mx-4 md:mx-0 md:w-1/2" data-accordion="collapse"
                 data-active-classes="bg-gray-900 text-white"
                 data-inactive-classes="text-gray-400">
                <h2 id="accordion-flush-heading-1">
                    <button type="button"
                            class="flex items-center pl-4 justify-between w-full py-5 font-medium text-left border-b border-gray-700 text-gray-400"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="false"
                            aria-controls="accordion-flush-body-1">
                        <span>Ramasser rapidement sans ramasseur</span>
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                             viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 pl-4     text-gray-400">Vous pouvez ajouter dans votre barre
                            d'action "Ramasser un objet" via la fenêtre d'émotions (touche "O").</p>
                        <p class="flex justify-center">
                            <img src="{{asset('img/ramasser.png')}}">
                        </p>
                        <p class="mb-2 pl-4 text-gray-400">Ainsi, en appuyant rapidement sur la
                            touche en question (admettons "3", vous ramasserez à vos pied tous les objets très
                            rapidement.</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-2">
                    <button type="button"
                            class="flex items-center pl-4 justify-between w-full py-5 font-medium text-left border-b border-gray-700 text-gray-400"
                            data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                            aria-controls="accordion-flush-body-2">
                        <span>Taper plus fort, et récupérer plus d'objets</span>
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                             viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 pl-4 text-gray-400">Vous saviez que vous pouviez rejoindre des
                            groupes existants ?</p>

                        <p class="mb-2 pl-4 text-gray-400">Via la touche "p", vous pouvez
                            chercher parmit la liste de groupe ceux qui peuvent vous faire profiter de certains
                            buffs (on appelle ça un groupe "TPF" :</p>
                        <p class="flex justify-center gap-2">
                            <img src="{{asset('img/t.png')}}">
                            <img src="{{asset('img/p.png')}}">
                            <img src="{{asset('img/f.png')}}">
                        </p>
                        <p class="mb-2 pl-4 text-gray-400">Cependant, il faut que le chef de groupe
                            dispose au moins de ce parchemin :</p>
                        <p class="flex justify-center">
                            <img class="w-8" src="{{asset('img/parcho.png')}}">
                        </p>
                        <p class="mb-2 pl-4 text-gray-400">En général, si vous n'avez pas de compte
                            secondaire, vous serez rapidement éjecté du groupe (car vous ne rapportez pas suffisement
                            d'xp).</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-3">
                    <button type="button"
                            class="flex items-center pl-4 justify-between w-full py-5 font-medium text-left border-b border-gray-700 text-gray-400"
                            data-accordion-target="#accordion-flush-body-3" aria-expanded="false"
                            aria-controls="accordion-flush-body-3">
                        <span>Récuperer un grand nombre d'objets sur les monstres</span>
                        <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                             viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-3" class="hidden" aria-labelledby="accordion-flush-heading-3">
                    <div class="py-5 font-light border-b border-gray-200 dark:border-gray-700">
                        <p class="mb-2 pl-4 text-gray-400">Les monstres qui ont plus ou moins 3
                            niveaux de différence avec le votre auront plus facilement tendance à faire tomber des
                            objets.</p>
                        <p class="mb-2 pl-4 text-gray-400">Vous gagnerez certes moins d'xp, mais beaucoup plus
                            d'objet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
