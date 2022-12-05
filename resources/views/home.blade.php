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


<!--
    <div class="flex justify-center">
        <div class="flex justify-center items-center transition ease-in-out hover:scale-110">
            <div class="text-white z-10 absolute">
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
    <div>
        <svg id="visual" viewBox="0 0 600 600" width="400" height="400" xmlns="http://www.w3.org/2000/svg"
             class="svg-shadow"
             xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
            <g transform="translate(290.8486937205423 286.2995160114952)">
                <path id="blob1"
                      d="M136.9 -197.3C171.1 -163.6 188.3 -115.2 208.6 -64.9C228.9 -14.6 252.3 37.5 247.5 89.1C242.6 140.6 209.5 191.7 163.5 226.2C117.6 260.8 58.8 278.9 13.9 259.8C-31 240.6 -61.9 184.2 -100.7 147.3C-139.6 110.5 -186.3 93.1 -210.6 58.8C-234.9 24.6 -236.8 -26.5 -212.7 -59.3C-188.5 -92.2 -138.4 -106.8 -98.6 -138.7C-58.8 -170.6 -29.4 -219.8 11 -234.9C51.3 -250 102.7 -231 136.9 -197.3"
                      class="fill-neutral-800"></path>
            </g>
            <g transform="translate(286.40784549315674 292.23398335503794)">
                <path id="blob2" style="visibility: hidden"
                      d="M140.8 -192.3C166 -175.5 158.6 -112.3 177.3 -57.1C195.9 -1.9 240.6 45.4 242.1 90.3C243.5 135.2 201.7 177.6 154.1 197C106.6 216.4 53.3 212.7 0.1 212.5C-53.1 212.4 -106.2 215.8 -142.7 192.8C-179.1 169.9 -198.9 120.5 -208.5 72.2C-218.1 23.9 -217.5 -23.3 -203.2 -65.6C-188.8 -107.9 -160.8 -145.4 -124.7 -158.6C-88.6 -171.9 -44.3 -161 6.8 -170.3C57.8 -179.6 115.6 -209.1 140.8 -192.3"
                      class="fill-neutral-800"></path>
            </g>
        </svg>
    </div>
</div>
<div class="flex justify-center items-center transition ease-in-out hover:scale-110">
    <div class="text-white z-10 absolute">
        <div class="flex items-center rounded-xl px-3">
            <div class="inline-block relative shrink-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.25 7.756a4.5 4.5 0 100 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            <div class="ml-3 text-sm font-normal">
                <div class="md:text-xl font-semibold text-white">Hotel de vente</div>

@if($hdvCount == 0)
        <div class="md:text-lg text-neutral-300 font-normal">Aucun nouvel objet</div>
@elseif($hdvCount == 1)
        <div class="md:text-lg text-neutral-300 font-normal">{{ $hdvCount }} nouvel objet</div>
                        @else
        <div class="md:text-lg text-neutral-300 font-normal">{{ $hdvCount }} nouveaux objets
                            </div>
                        @endif

    </div>
</div>
</div>
<svg id="visual" viewBox="0 0 600 600" width="400" height="400" xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
<g transform="translate(321.7990969328124 266.7323487941595)">
    <path id="blob3"
          d="M111.9 -136.3C152.5 -124.5 198 -101.8 206.3 -68.8C214.6 -35.7 185.8 7.6 167.6 51.7C149.5 95.7 142 140.5 115.9 177.8C89.7 215.2 44.9 245.1 -1.8 247.5C-48.4 249.9 -96.8 224.9 -131 190.2C-165.3 155.5 -185.3 111.1 -208.7 62.4C-232.1 13.6 -258.7 -39.6 -249.5 -85.2C-240.4 -130.8 -195.4 -169 -147.9 -178.5C-100.3 -188.1 -50.2 -169 -7.2 -159.1C35.7 -149.1 71.3 -148.2 111.9 -136.3"
          class="fill-neutral-800"></path>
</g>
<g transform="translate(284.7193499843259 324.85898487209147)">
    <path id="blob4" visibility="hidden"
          d="M142 -194.9C189.5 -160.9 237.4 -126.8 237.6 -86.6C237.8 -46.4 190.2 0 169.7 52.7C149.2 105.3 155.7 164.3 131.9 191.3C108.2 218.2 54.1 213.1 4.2 207.3C-45.7 201.5 -91.3 195 -128.4 172.4C-165.5 149.8 -194 111 -203.4 69.2C-212.7 27.3 -202.9 -17.7 -188.4 -60.9C-174 -104.1 -154.9 -145.5 -122.7 -184.5C-90.5 -223.6 -45.3 -260.3 1 -261.6C47.2 -263 94.4 -229 142 -194.9"
          class="fill-neutral-800"></path>
</g>
</svg>
</div>
<div class="flex justify-center items-center transition ease-in-out hover:scale-110">
<p class="text-white z-10 absolute">Hotel de vente</p>
<svg id="visual" viewBox="0 0 600 600" width="400" height="400" xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
<g transform="translate(321.7990969328124 266.7323487941595)">
    <path id="blob5"
          d="M111.9 -136.3C152.5 -124.5 198 -101.8 206.3 -68.8C214.6 -35.7 185.8 7.6 167.6 51.7C149.5 95.7 142 140.5 115.9 177.8C89.7 215.2 44.9 245.1 -1.8 247.5C-48.4 249.9 -96.8 224.9 -131 190.2C-165.3 155.5 -185.3 111.1 -208.7 62.4C-232.1 13.6 -258.7 -39.6 -249.5 -85.2C-240.4 -130.8 -195.4 -169 -147.9 -178.5C-100.3 -188.1 -50.2 -169 -7.2 -159.1C35.7 -149.1 71.3 -148.2 111.9 -136.3"
          class="fill-neutral-800"></path>
</g>
<g transform="translate(290.8486937205423 286.2995160114952)">
    <path id="blob6" style="visibility: hidden"
          d="M136.9 -197.3C171.1 -163.6 188.3 -115.2 208.6 -64.9C228.9 -14.6 252.3 37.5 247.5 89.1C242.6 140.6 209.5 191.7 163.5 226.2C117.6 260.8 58.8 278.9 13.9 259.8C-31 240.6 -61.9 184.2 -100.7 147.3C-139.6 110.5 -186.3 93.1 -210.6 58.8C-234.9 24.6 -236.8 -26.5 -212.7 -59.3C-188.5 -92.2 -138.4 -106.8 -98.6 -138.7C-58.8 -170.6 -29.4 -219.8 11 -234.9C51.3 -250 102.7 -231 136.9 -197.3"
          class="fill-neutral-800"></path>
</g>
</svg>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js"></script>
<script>
const tween = KUTE.fromTo(
'#blob1',
{path: '#blob1'},
{path: '#blob2'},
{repeat: 99999, duration: 10000, yoyo: true},
)

const tween2 = KUTE.fromTo(
'#blob3',
{path: '#blob3'},
{path: '#blob4'},
{repeat: 99999, duration: 10000, yoyo: true},
)

const tween3 = KUTE.fromTo(
'#blob5',
{path: '#blob5'},
{path: '#blob6'},
{repeat: 99999, duration: 10000, yoyo: true},
)

tween.start()
tween2.start()
tween3.start()
</script> -->

@stop
