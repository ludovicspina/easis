@extends('welcome')
@section('content')

    <div>
        <div class="flex items-center justify-center mt-4">
            <div class="grid md:grid-cols-3 grid-cols-1 mx-4 md:mx-0 md:w-1/2 gap-4 md:gap-6">
                <div
                    class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-40 md:h-48 rounded-lg shadow-xl bg-neutral-900 backdrop-blur bg-opacity-70 shadow-xl text-gray-300">
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
                                    <div class="md:text-xl font-semibold underline text-white">Connecté</div>
                                    <div class="md:text-xl font-semibold text-white">{{ Auth::user()->name }}</div>
                                </div>
                                <div class="md:text-lg text-neutral-300 font-normal">{{ Auth::user()->email }}</div>
                                <form action="{{ route('logout') }}"
                                      method="POST">
                                    @csrf
                                    <button type="submit"
                                            class="md:text-base hover:underline hover:text-red-700 text-red-500 font-normal">
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
                <a href="hdv" style="background-image: url({{asset('wealth-2.jpg')}}); background-size: cover"
                   class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-40 md:h-48 rounded-lg drop-shadow backdrop-blur shadow-xl text-gray-300">
                    <div class="flex items-center backdrop-blur-sm rounded-xl px-3">
                        <div class="inline-block relative shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M14.25 7.756a4.5 4.5 0 100 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="ml-3 text-sm font-normal">
                            <div class="md:text-3xl font-semibold text-white">Hotel de vente</div>

                            @if($hdvCount == 0)
                                <div class="md:text-xl text-neutral-300 font-normal">Aucun nouvel objet</div>
                            @elseif($hdvCount == 1)
                                <div class="md:text-xl text-neutral-300 font-normal">{{ $hdvCount }} nouvel objet</div>
                            @else
                                <div class="md:text-xl text-neutral-300 font-normal">{{ $hdvCount }} nouveaux objets
                                </div>
                            @endif

                        </div>
                    </div>
                </a>
                <a href="https://discord.gg/kt75BpeqtV" style="background-image: url({{asset('discord.png')}}); background-size: cover; background-position: center"
                   class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-40 md:h-48 rounded-lg shadow-xl bg-neutral-900 backdrop-blur bg-opacity-70 shadow-xl text-gray-300">
                    <div class="flex items-center">
                        <div class="inline-block relative shrink-0">
                            <img src="{{ asset("/img/logo-easis.png") }}" class="w-10 h-10">
                        </div>
                        <div class="ml-3 text-sm font-normal">
                            <div class="md:text-3xl font-semibold text-white"></div>
                        </div>
                    </div>
                </a>
                <a href="https://universe.flyff.com/play"
                   class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-40 md:h-48 rounded-lg shadow-xl bg-neutral-900 backdrop-blur bg-opacity-70 shadow-xl text-gray-300">
                    <div class="flex items-center">
                        <img src="https://universe.flyff.com/storage/img/logofull.png" height="54"
                             alt="Flyff Universe logo">
                    </div>
                </a>
                <a href="https://madrigalinside.com/"
                   class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-40 md:h-48 rounded-lg shadow-xl bg-neutral-900 backdrop-blur bg-opacity-70 shadow-xl text-gray-300">
                    <div class="flex items-center">
                        <img width="278" height="107"
                             src="https://madrigalinside.com/wp-content/uploads/cropped-logo-flyff-universe-1-1.png"
                             class="attachment-full size-full" alt="" loading="lazy">
                    </div>
                </a>
                <a href="https://flyffipedia.com/"
                   class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-40 md:h-48 rounded-lg shadow-xl bg-neutral-900 backdrop-blur bg-opacity-70 shadow-xl text-gray-300">
                    <div class="flex items-center">
                        <img width="278" height="107"
                             src="{{ asset("/img/uflyff.png") }}"
                             class="attachment-full size-full" alt="" loading="lazy">
                    </div>
                </a>
                <div></div>
                <a href="mentions"
                   class="p-3 w-full flex items-center max-w-xs transition ease-in-out hover:scale-105 h-40 md:h-48 rounded-lg shadow-xl bg-neutral-900 backdrop-blur bg-opacity-70 shadow-xl text-gray-300">
                    <div class="flex items-center">
                        <div class="inline-block relative shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-10 h-10">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                            </svg>

                        </div>
                        <div class="ml-3 text-sm font-normal">
                            <div class="text-2xl font-semibold flex justify-center text-white">Mentions légales</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

@stop
