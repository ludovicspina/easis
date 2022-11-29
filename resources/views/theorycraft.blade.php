@extends('welcome')
@section('content')
    <div>
        <div>
            <img src="https://api.flyff.com/image/class/target/{{ $chevalier->icon }}">
        </div>

        <div class="flex flex-col gap-4">
            <div class="flex gap-32 text-neutral-300">

                <div class="flex flex-col">
                    <label for="level">Level </label><input class="w-48 text-neutral-800" id="level">

                    <label for="force">FOR</label><input value="15" class="w-48 text-neutral-800" id="force">
                    <label for="endurence">END</label><input value="15" class="w-48 text-neutral-800" id="endurence">
                    <label for="dexterite">DEX</label><input value="15" class="w-48 text-neutral-800" id="dexterite">
                    <label for="intelligence">INT</label><input value="15" class="w-48 text-neutral-800" id="intelligence">
                </div>
                <div>
                    <div class="underline">HP</div>
                    <div id="sorcier" class="text-white">Sorcier:</div>
                    <div id="elementaliste" class="text-white">Elementaliste:</div>

                    <div id="moine" class="text-white">Moine:</div>
                    <div id="pretre" class="text-white">Pretre:</div>

                    <div id="ranger" class="text-white">Ranger:</div>
                    <div id="jester" class="text-white">Jester:</div>

                    <div id="chevalier" class="text-white">Chevalier:</div>
                    <div id="assassin" class="text-white">Assassin:</div>
                </div>
                <div>
                    <div class="underline">FP</div>
                    <div id="sorcierF" class="text-white">Sorcier:</div>
                    <div id="elementalisteF" class="text-white">Elementaliste:</div>

                    <div id="moineF" class="text-white">Moine:</div>
                    <div id="pretreF" class="text-white">Pretre:</div>

                    <div id="rangerF" class="text-white">Ranger:</div>
                    <div id="jesterF" class="text-white">Jester:</div>

                    <div id="chevalierF" class="text-white">Chevalier:</div>
                    <div id="assassinF" class="text-white">Assassin:</div>
                </div>
                <div>
                    <div class="underline">MP</div>
                    <div id="sorcierM" class="text-white">Sorcier:</div>
                    <div id="elementalisteM" class="text-white">Elementaliste:</div>

                    <div id="moineM" class="text-white">Moine:</div>
                    <div id="pretreM" class="text-white">Pretre:</div>

                    <div id="rangerM" class="text-white">Ranger:</div>
                    <div id="jesterM" class="text-white">Jester:</div>

                    <div id="chevalierM" class="text-white">Chevalier:</div>
                    <div id="assassinM" class="text-white">Assassin:</div>
                </div>
            </div>
            <a onclick="calc()" class="cursor-pointer w-32 text-center bg-neutral-200 rounded p-2 text-neutral-800">Calculer</a>
        </div>
    </div>

    <script>
        function calc() {
            let level = document.getElementById('level').value
            let force = document.getElementById('force').value
            let endurence = document.getElementById('endurence').value
            let dexterite = document.getElementById('dexterite').value
            let intelligence = document.getElementById('intelligence').value

            document.getElementById('sorcier').textContent = document.getElementById('sorcier').textContent + " " + " " + (150 + level * 30 + endurence * level * 0.3).toString()
            document.getElementById('elementaliste').textContent = document.getElementById('elementaliste').textContent + " " + " " + (150 + level * 30 + endurence * level * 0.3).toString()
            document.getElementById('moine').textContent = document.getElementById('moine').textContent + " " + " " + (150 + level * 36 + endurence * level * 0.36).toString()
            document.getElementById('pretre').textContent = document.getElementById('pretre').textContent + " " + " " + (150 + level * 34 + endurence * level * 0.34).toString()
            document.getElementById('ranger').textContent = document.getElementById('ranger').textContent + " " + " " + (150 + level * 32 + endurence * level * 0.32).toString()
            document.getElementById('jester').textContent = document.getElementById('jester').textContent + " " + " " + (150 + level * 30 + endurence * level * 0.3).toString()
            document.getElementById('chevalier').textContent = document.getElementById('chevalier').textContent + " " + " " + (150 + level * 40 + endurence * level * 0.4).toString()
            document.getElementById('assassin').textContent = document.getElementById('assassin').textContent + " " + " " + (150 + level * 30 + endurence * level * 0.3).toString()

            document.getElementById('assassinF').textContent = document.getElementById('assassinF').textContent + " " + " " + (level * 2.4 + endurence * 8.400001).toString()
            document.getElementById('jesterF').textContent = document.getElementById('jesterF').textContent + " " + " " + (level * 2 + endurence * 7).toString()
            document.getElementById('rangerF').textContent = document.getElementById('rangerF').textContent + " " + " " + (level * 1.2 + endurence * 4.2).toString()
            document.getElementById('sorcierF').textContent = document.getElementById('sorcierF').textContent + " " + " " + (level * 0.8 + endurence * 2.8).toString()
            document.getElementById('moineF').textContent = document.getElementById('moineF').textContent + " " + " " + (level * 2.2 + endurence * 7.7).toString()
            document.getElementById('elementalisteF').textContent = document.getElementById('elementalisteF').textContent + " " + " " + (level * 0.8 + endurence * 2.8).toString()
            document.getElementById('pretreF').textContent = document.getElementById('pretreF').textContent + " " + " " + (level * 0.8 + endurence * 2.8).toString()
            document.getElementById('chevalierF').textContent = document.getElementById('chevalierF').textContent + " " + " " + (level * 3 + endurence * 10.5).toString()

            document.getElementById('assassinM').textContent = document.getElementById('assassinM').textContent + " " + " " + (22 + level * 1.2 + intelligence * 5.4).toString()
            document.getElementById('jesterM').textContent = document.getElementById('jesterM').textContent + " " + " " + (22 + level * 1 + intelligence * 4.5).toString()
            document.getElementById('rangerM').textContent = document.getElementById('rangerM').textContent + " " + " " + (22 + level * 2.4 + intelligence * 10.8).toString()
            document.getElementById('sorcierM').textContent = document.getElementById('sorcierM').textContent + " " + " " + (22 + level * 4 + intelligence * 18).toString()
            document.getElementById('moineM').textContent = document.getElementById('moineM').textContent + " " + " " + (22 + level * 1.8 + intelligence * 8.1).toString()
            document.getElementById('elementalisteM').textContent = document.getElementById('elementalisteM').textContent + " " + " " + (22 + level * 4 + intelligence * 18).toString()
            document.getElementById('pretreM').textContent = document.getElementById('pretreM').textContent + " " + " " + (22 + level * 3.6 + intelligence * 16.2).toString()
            document.getElementById('chevalierM').textContent = document.getElementById('chevalierM').textContent + " " + " " + (22 + level * 1.2 + intelligence * 5.4).toString()

        }
    </script>
@stop
