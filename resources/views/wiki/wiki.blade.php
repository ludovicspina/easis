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
                    <a href="{{route('wiki')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Wiki</a>
                </div>
            </li>
        </ol>
    </nav>

    <div class="grid grid-cols-2 gap-4 mx-4">
        <div class="w-full rounded-lg border shadow-md bg-gray-800 border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center rounded-t-lg border-b border-gray-700 text-gray-400 bg-gray-800"
                id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="mr-2">
                    <button id="clock-base" data-tabs-target="#about" type="button" role="tab" aria-controls="about"
                            aria-selected="true"
                            class="inline-block p-4 rounded-tl-lg bg-gray-800 hover:bg-gray-700 text-blue-500">Clockworks
                    </button>
                </li>
                <li class="mr-2">
                    <button id="clock-stats" data-tabs-target="#services" type="button" role="tab"
                            aria-controls="services"
                            aria-selected="false"
                            class="inline-block p-4 hover:bg-gray-100 hover:bg-gray-700 hover:text-gray-300">Statistiques
                    </button>
                </li>
                <li class="mr-2">
                    <button id="clock-stats" data-tabs-target="#statistics" type="button" role="tab"
                            aria-controls="statistics" aria-selected="false"
                            class="inline-block p-4 hover:bg-gray-700 hover:text-gray-300">Minimum requis
                    </button>
                </li>
            </ul>
            <div id="defaultTabContent">
                <div class="hidden p-4 rounded-lg md:p-8 bg-gray-800" id="about" role="tabpanel"
                     aria-labelledby="clock-base">
                    <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-white">Powering innovation & trust at
                        200,000+ companies worldwide</h2>
                    <p class="mb-3 text-gray-400">Empower Developers, IT Ops, and business teams to collaborate at high
                        velocity. Respond to changes and deliver great customer and employee service experiences
                        fast.</p>
                    <a href="#" class="inline-flex items-center font-medium text-blue-500 hover:text-blue-700">
                        Learn more
                        <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div class="hidden p-4 rounded-lg md:p-8 bg-gray-800" id="services" role="tabpanel"
                     aria-labelledby="clock-stats">
                    <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-white">We invest in the world’s
                        potential</h2>
                    <!-- List -->
                    <ul role="list" class="space-y-4 text-gray-400">
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-light leading-tight">Dynamic reports and dashboards</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-light leading-tight">Templates for everyone</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-light leading-tight">Development workflow</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4  text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-light leading-tight">Limitless business automation</span>
                        </li>
                    </ul>
                </div>
                <div class="hidden p-4 rounded-lg md:p-8 :bg-gray-800" id="statistics" role="tabpanel"
                     aria-labelledby="clock-stats">
                    <dl class="grid grid-cols-2 gap-8 p-4 mx-auto max-w-screen-xl sm:grid-cols-3 xl:grid-cols-6 text-white sm:p-8">
                        <div class="flex flex-col">
                            <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                            <dd class="font-light text-gray-400">Developers</dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                            <dd class="font-light text-gray-400">Public repositories</dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                            <dd class="font-light text-gray-400">Open source projects</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
        <div class="w-full rounded-lg border shadow-md bg-gray-800 border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center rounded-t-lg border-b border-gray-700 text-gray-400 bg-gray-800"
                id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="mr-2">
                    <button id="clock-base" data-tabs-target="#about" type="button" role="tab" aria-controls="about"
                            aria-selected="true"
                            class="inline-block p-4 rounded-tl-lg bg-gray-800 hover:bg-gray-700 text-blue-500">About
                    </button>
                </li>
                <li class="mr-2">
                    <button id="clock-stats" data-tabs-target="#services" type="button" role="tab"
                            aria-controls="services"
                            aria-selected="false"
                            class="inline-block p-4 hover:bg-gray-100 hover:bg-gray-700 hover:text-gray-300">Services
                    </button>
                </li>
                <li class="mr-2">
                    <button id="clock-stats" data-tabs-target="#statistics" type="button" role="tab"
                            aria-controls="statistics" aria-selected="false"
                            class="inline-block p-4 hover:bg-gray-700 hover:text-gray-300">Facts
                    </button>
                </li>
            </ul>
            <div id="defaultTabContent">
                <div class="hidden p-4 rounded-lg md:p-8 bg-gray-800" id="about" role="tabpanel"
                     aria-labelledby="clock-base">
                    <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-white">Powering innovation & trust at
                        200,000+ companies worldwide</h2>
                    <p class="mb-3 text-gray-400">Empower Developers, IT Ops, and business teams to collaborate at high
                        velocity. Respond to changes and deliver great customer and employee service experiences
                        fast.</p>
                    <a href="#" class="inline-flex items-center font-medium text-blue-500 hover:text-blue-700">
                        Learn more
                        <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div class="hidden p-4 rounded-lg md:p-8 bg-gray-800" id="services" role="tabpanel"
                     aria-labelledby="clock-stats">
                    <h2 class="mb-5 text-2xl font-extrabold tracking-tight text-white">We invest in the world’s
                        potential</h2>
                    <!-- List -->
                    <ul role="list" class="space-y-4 text-gray-400">
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-light leading-tight">Dynamic reports and dashboards</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-light leading-tight">Templates for everyone</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-light leading-tight">Development workflow</span>
                        </li>
                        <li class="flex space-x-2">
                            <!-- Icon -->
                            <svg class="flex-shrink-0 w-4 h-4  text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-light leading-tight">Limitless business automation</span>
                        </li>
                    </ul>
                </div>
                <div class="hidden p-4 rounded-lg md:p-8 :bg-gray-800" id="statistics" role="tabpanel"
                     aria-labelledby="clock-stats">
                    <dl class="grid grid-cols-2 gap-8 p-4 mx-auto max-w-screen-xl sm:grid-cols-3 xl:grid-cols-6 text-white sm:p-8">
                        <div class="flex flex-col">
                            <dt class="mb-2 text-3xl font-extrabold">73M+</dt>
                            <dd class="font-light text-gray-400">Developers</dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="mb-2 text-3xl font-extrabold">100M+</dt>
                            <dd class="font-light text-gray-400">Public repositories</dd>
                        </div>
                        <div class="flex flex-col">
                            <dt class="mb-2 text-3xl font-extrabold">1000s</dt>
                            <dd class="font-light text-gray-400">Open source projects</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-4">

        <!-- Eveil objet -->
        <div class="grid md:grid-cols-3 grid-cols-2 gap-6">
            <a href="#" data-modal-toggle="modal1"
               class="block px-6 py-4 max-w-sm rounded-lg border shadow-md bg-gray-700 border-gray-700 hover:bg-gray-700">
                <h5 class="text-2xl font-bold tracking-tight text-white">Eveils d'objets</h5>
            </a>
        </div>
        <div id="modal1" tabindex="-1" aria-hidden="true"
             class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <div class="relative rounded-lg shadow bg-gray-700">
                    <div class="flex justify-between items-start p-4 rounded-t border-b border-gray-600">
                        <h3 class="text-xl font-semibold text-white">
                            Eveils d'objets
                        </h3>
                        <button type="button"
                                class="text-gray-400 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center hover:bg-gray-600 hover:text-white"
                                data-modal-toggle="modal1">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Fermer</span>
                        </button>
                    </div>
                    <div class="p-6 space-y-6">
                        <p class="text-base leading-relaxed text-gray-400">
                            Parchemins de statistiques : 500 fcoins pour 10 en boutique, avec le choix entre les
                            statistiques existantes (FOR, DEX, END et INT).</p>
                        <p class="text-base leading-relaxed text-gray-400">
                            Ils se vendent généralement entre 2.5M et 3M par unité en boutique de joueurs à Darkon2
                            (prix pouvant varier).</p>
                        <p class="text-base leading-relaxed text-gray-400">
                            Chacun de ces parchemins est à usage unique et fonctionne sur chaque partie d'un set, arme
                            ou bouclier.</p>
                        <p class="text-base leading-relaxed text-gray-400">
                            Ils attribuent une statistiques bonus à la pièce sélectionnée, et le bonus de statistique
                            obtenue variera entre +1 et +4.</p>
                        <p class="text-base leading-relaxed text-gray-400">
                            <u>Exemple :</u> si vous souhaitez éveiller votre casque avec un parchemun de statistiques
                            FOR, le résultat sera soit +1, +2, +3 ou +4 au mieux.</p>
                        <p class="text-base leading-relaxed text-gray-400">
                            Si le bonus de statistique obtenue ne vous convient pas, vous pouvez recommencer sur le même
                            équipement. Vous pouvez tomber sur mieux comme sur pire. Il est important de noter que vous
                            pouvez retomber sur le même niveau de statistique.</p>
                        <p class="text-base leading-relaxed text-gray-400">
                            Ils se vendent généralement entre 2.5M et 3M par unité en boutique de joueurs à Darkon2
                            (prix pouvant varier).</p>
                        <p class="text-base leading-relaxed text-gray-400 animate-pulse underline">
                            @Ethalides</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
