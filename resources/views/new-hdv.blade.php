@extends('welcome')
@section('content')

    <div>
        <div class="autoComplete_wrapper">
            <input id="autoComplete" type="search" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off"
                   autocapitalize="off">
            <input id="autoCompleteId" type="search" dir="ltr" spellcheck=false autocorrect="off" autocomplete="off"
                   autocapitalize="off">
        </div>


        <img id="autoCompleteIcon" src="#" alt="itemIcon">

        <script
            src="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/autoComplete.min.js"></script>


        <script>

            var items = {!! json_encode($items) !!};
            iNames = [];
            items.forEach(element => iNames.push(element.nameFr));
            let itemNames = [];
            for (let i = 0; i < iNames.length; i++) {
                if (itemNames.indexOf(iNames[i]) === -1)
                    itemNames.push(iNames[i])
            }

            var icons = {!! json_encode($icons) !!};
            iIcons = [];
            icons.forEach(element => iIcons.push(element.icon));

            console.log(icons)
            console.log(items)


            const autoCompleteJS = new autoComplete({
                placeHolder: "Rechercher des objets...",
                data: {
                    src: itemNames,
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
                            itemNames.forEach(function callback(element, i) {
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
@stop
