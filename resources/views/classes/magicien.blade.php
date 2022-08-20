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
                    <a href="{{route('classes')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Classes</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <a href="{{route('magicien')}}"
                       class="ml-1 text-sm font-medium md:ml-2 text-gray-400 hover:text-white">Magicien</a>
                </div>
            </li>
        </ol>
    </nav>


    <div class="flex justify-center mt-6 text-neutral-200">
        <div class="flex flex-col">
            <div class="text-4xl font-bold text-center">La voie du Magicien</div>
            <div class="text-2xl mt-4 font-bold text-center">Les grandes lignes ...</div>
        </div>
    </div>

    <div class="grid grid-cols-0 mt-6 md:grid-cols-2 gap-10 md:mx-64 mx-4">
        <div class="flex justify-left my-6 text-neutral-200">
            <div class="flex flex-col">
                <div class="text-xl text-neutral-300">Les Magicien sont des DPS très puissant mais faibles en règle
                    générale.
                </div>
                <div class="text-xl mt-4 text-neutral-300">Le Magicien évoluera en deux classes distinctes au niveau 60
                    :
                    Sorcier et Elementaliste.
                </div>
                <div class="text-xl mt-4 text-neutral-300">Le Sorcier sera orienté dans du mono-cible, contrairement à
                    l'Elémentalste qui lui sera orienté dans de l'AOE. (Cela n'est pas une généralité, allez voir les
                    guides <a class="text-indigo-400 underline" href="#">Sorcier</a> & <a
                        class="underline text-indigo-400" href="#">Elementaliste</a>)
                </div>
                <div class="text-xl font-semibold mt-4 text-neutral-300 animate-pulse">Mais avant ça, il faut passer
                    niveau 60 ...
                </div>
            </div>
        </div>
        <div class="flex justify-center md:my-6 text-neutral-200">
            <div class="text-xl text-neutral-300">
                <div class="flex flex-col gap-2">
                    <p>Ils manient les 5 éléments, chacun prenant l'ascendant sur un autre : </p>
                    <img class="md:ml-32 ml-16 h-64 w-64" src="{{asset('img/elements.png')}}">
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-0 mt-6 gap-10 md:mx-64 w-3/4 mx-4">
        <div class="flex justify-left my-6 text-neutral-200">
            <div class="flex flex-col">
                <div class="text-3xl underline text-purple-300">Comment passer 60 avec son Magicien ?
                </div>
                <div class="text-2xl mt-4 text-purple-200">- Les compétences
                </div>
                <div class="text-lg mt-4 text-neutral-300">Tout d'abord, il est important de ne pas monter ses sorts
                    élémentaires n'importe comment.
                </div>
                <div class="flex gap-2">
                    <div class="text-lg mt-2 text-neutral-300">La compétence la plus utile, et qu'il faudra maxer en
                        priorité est <u class="font-bold">fouet mental :</u>

                    </div>
                    <img alt="fouet mental" class="h-10" src="{{asset('img/fouet-mental.gif')}}">
                </div>

                <div class="text-lg mt-2 text-neutral-300">Avant le niveau 30, il ne vous sera pas nécéssaire
                    d'augmenter d'autre sorts élémentaire.
                </div>
                <div class="flex gap-2">
                    <div class="text-lg mt-2 text-neutral-300">Ensuite, montez <u class="text-blue-400">Lame de vent</u>
                    </div>
                    <img alt="vent3" class="h-10 w-10" src="{{asset('img/vent3.png')}}">
                    <div class="text-lg mt-2 text-neutral-300">car la majorité des monstres
                        que vous allez affronter seront d'élément terre,
                    </div>
                </div>
                <div class="text-lg text-neutral-300">donc vous aurez un avantage sur eux (voir roue élémentaire).
                </div>

                <div class="text-lg mt-3 text-neutral-300">Pour ce qui est des autres éléments, ceux à monter après sont
                    généralement <u class="text-orange-700">Terre</u> et <u class="text-yellow-300">Foudre</u>.
                </div>
                <div class="text-lg mt-1 text-neutral-300">Cependant je trouve que ce choix est personnel, et dépend
                    surtout de quels monstres vous souhaiterez
                    tuer pour XP.
                </div>
                <div class="text-2xl mt-4 text-purple-200">- Les statistiques
                </div>
                <div class="text-lg mt-4 text-neutral-300">Full INT. Vraiment.
                </div>
                <div class="text-lg mt-2 text-neutral-300">Sauf si vous voulez économiser de la
                    nourriture, vous pouvez mettre quelques points en END, mais c'est vraiment très peu utile.
                </div>
                <div class="text-lg mt-2 text-neutral-300">Et pour ce qui est des statistiques FOR et DEX, pas besoin de
                    vous expliquer :p
                </div>
                <div class="text-2xl mt-4 text-purple-200">- Les equipements

                </div>
                <div class="text-lg mt-4 text-neutral-300">Au niveau des armes, prenez ce qui est à votre level, pas
                    besoin de stuff légendaire pour monter lvl 60.
                </div>
                <div class="text-lg text-neutral-300">Il n'y a pas de bonne ou de mauvais solutions, faites vous
                    confiance.
                </div>
                <div class="text-lg mt-2 text-neutral-300">Si vous voulez quand même que je choisisse, prenez l'arme
                    correspondant à votre future classe :
                </div>
                <div class="text-lg text-neutral-300">- Sorcier -> Baguette et bouclier
                </div>
                <div class="text-lg text-neutral-300">- Elémentaliste -> Bâton
                </div>
                <div class="text-lg mt-4 text-neutral-300">Pour ce qui est des équipements, pas besoin d'investir des centaines de milliers de penya.
                </div>
                <div class="text-lg text-neutral-300">Prenez ce que vous lootez, et achetez au PNJ les pièces qui vous manque.
                </div>
                <div class="text-lg mt-2 text-neutral-300">Cependant, le set Misty(F) et Kadjar(H) vous seront fortement utiles, pas indispenable mais très utile.
                </div>
                <div class="text-lg text-neutral-300">Chassez du géant ou trouvez les en magasin, ça devrait pas vous coûter trop cher !
                </div>

            </div>
        </div>

@stop
