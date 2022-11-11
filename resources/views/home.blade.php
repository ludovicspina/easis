@extends('welcome')
@section('content')

    <div>
        <div class="flex items-center justify-center mt-4">
            <div class="grid md:grid-cols-3 md:w-1/2 gap-6">
                <div
                    class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-48 rounded-lg shadow-xl bg-gray-900 shadow-xl text-gray-300">
                    <div class="flex items-center">
                        <div class="inline-block relative shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="z-10 w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                            </svg>
                        </div>
                        @if(Auth::user())
                            <div class="ml-3 text-sm font-normal">
                                <div>
                                    <div class="text-xl font-semibold underline text-white">Connecté</div>
                                    <div class="text-xl font-semibold text-white">{{ Auth::user()->name }}</div>
                                </div>
                                <div class="text-lg text-neutral-300 font-normal">{{ Auth::user()->email }}</div>
                                <form action="{{ route('logout') }}"
                                      method="POST">
                                    @csrf
                                    <button type="submit"
                                            class="text-base hover:underline hover:text-red-700 text-red-500 font-normal">
                                        Se déconnecter
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="ml-3 text-sm font-normal">
                                <div class="text-xl font-semibold underline text-white">Déconnecté</div>
                                <div class="flex gap-1">
                                    <a href="{{ route('login') }}"
                                       class="hover:underline hover:text-blue-700 text-lg text-blue-500 font-normal">Se
                                        connecter</a>
                                    <div class="text-lg">ou</div>
                                    <a href="{{ route('register') }}"
                                       class="hover:underline hover:text-blue-700 text-lg text-blue-500 font-normal">s'inscrire</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div
                    class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-48 rounded-lg shadow-xl bg-gray-900 shadow-xl text-gray-300">
                    <div class="flex items-center">
                        <div class="inline-block relative shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14.25 7.756a4.5 4.5 0 100 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="ml-3 text-sm font-normal">
                            <div class="text-xl font-semibold underline text-white">Hotel de vente</div>


                            @if($hdvCount == 0)
                                <div class="text-lg text-neutral-300 font-normal">Aucun nouvel objet</div>
                            @elseif($hdvCount == 1)
                                <div class="text-lg text-neutral-300 font-normal">{{ $hdvCount }} nouvel objet</div>
                            @else
                                <div class="text-lg text-neutral-300 font-normal">{{ $hdvCount }} nouveaux objets</div>
                            @endif

                            <a href="hdv"
                               class="text-base hover:underline hover:text-blue-700 text-blue-500 font-normal">
                                Aller faire un tour
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-48 rounded-lg shadow-xl bg-gray-900 shadow-xl text-gray-300">
                    <div class="flex items-center">
                        <div class="inline-block relative shrink-0">
                            <img src="{{ asset("/img/logo-easis.png") }}" class="w-6 h-6">
                        </div>
                        <div class="ml-3 text-sm font-normal">
                            <div class="text-xl font-semibold underline text-white">Discord</div>
                            <a href="https://discord.gg/kt75BpeqtV"
                               class="text-base hover:underline hover:text-blue-700 text-blue-500 font-normal">
                                Rejoindre le discord d'Easis
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-48 rounded-lg shadow-xl bg-gray-900 shadow-xl text-gray-300">
                    <a href="https://universe.flyff.com/play" class="flex items-center">
                        <img src="https://universe.flyff.com/storage/img/logofull.png" height="54"
                             alt="Flyff Universe logo">
                    </a>
                </div>
                <div
                    class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-48 rounded-lg shadow-xl bg-gray-900 shadow-xl text-gray-300">
                    <a href="https://madrigalinside.com/" class="flex items-center">
                        <img width="278" height="107"
                             src="https://madrigalinside.com/wp-content/uploads/cropped-logo-flyff-universe-1-1.png"
                             class="attachment-full size-full" alt="" loading="lazy">
                    </a>
                </div>
                <div
                    class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-48 rounded-lg shadow-xl bg-gray-900 shadow-xl text-gray-300">
                    <a href="https://flyffipedia.com/" class="flex items-center">
                        <img width="278" height="107"
                             src="{{ asset("/img/uflyff.png") }}"
                             class="attachment-full size-full" alt="" loading="lazy">
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop
