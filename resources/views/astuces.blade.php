@extends('welcome')
@section('content')
    <div class="flex flex-col">
        <div class="flex justify-center mt-16 text-neutral-200">
            <div class="flex flex-col">
                <div class="text-6xl font-bold">Astuces générales</div>
                <div class="text-xl mt-6 text-neutral-300">Voici une liste de différentes astuces qui vous aideront
                    durant le jeu.
                </div>
            </div>

        </div>
        <div class="flex justify-center mt-6">
            <div id="accordion-flush" class="flex flex-col w-1/2" data-accordion="collapse"
                 data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                 data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 id="accordion-flush-heading-1">
                    <button type="button"
                            class="flex items-center pl-4 justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
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
                        <div class="flex gap-4">
                            <p class="mb-2 pl-4 text-gray-500 dark:text-gray-400">Vous pouvez ajouter dans votre barre
                                d'action "Ramasser un objet" via la fenêtre d'émotions (touche "O").</p>
                            <img src="{{asset('img/ramasser.png')}}">
                        </div>
                        <p class="mb-2 pl-4 text-gray-500 dark:text-gray-400">Ainsi, en appuyant rapidement sur la
                            touche en question (admettons "3", vous ramasserez à vos pied tous les objets très
                            rapidement.</p>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-2">
                    <button type="button"
                            class="flex items-center pl-4 justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400"
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
                        <p class="mb-2 pl-4 text-gray-500 dark:text-gray-400">Vous saviez que vous pouviez rejoindre des
                            groupes existants ?</p>

                        <p class="mb-2 pl-4 text-gray-500 dark:text-gray-400">Via la touche "p", vous pouvez
                            chercher parmit la liste de groupe ceux qui peuvent vous faire profiter de certains
                            buffs (on appelle ça un groupe "TPF" :</p>
                        <p class="flex justify-center gap-2">
                            <img src="{{asset('img/t.png')}}">
                            <img src="{{asset('img/p.png')}}">
                            <img src="{{asset('img/f.png')}}">
                        </p>
                        <p class="mb-2 pl-4 text-gray-500 dark:text-gray-400">Cependant, il faut que le chef de groupe
                            dispose au moins de ce parchemin :</p>
                        <p class="flex justify-center">
                            <img width="3%" src="{{asset('img/parcho.png')}}">
                        </p>
                        <p class="mb-2 pl-4 text-gray-500 dark:text-gray-400">En général, si vous n'avez pas de compte
                            secondaire, vous serez rapidement éjecté du groupe (car vous ne rapportez pas suffisement
                            d'xp).</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
