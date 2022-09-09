@extends('welcome')
@section('content')



    <form autocomplete="off" action="/action_page.php">
        <div class="autocomplete" style="width:300px;">
            <input id="myInput" type="text" name="myCountry" placeholder="Country">
        </div>
        <input type="submit">
    </form>




    <style>
        * { box-sizing: border-box; }
        body {
            font: 16px Arial;
        }
        .autocomplete {
            /*the container must be positioned relative:*/
            position: relative;
            display: inline-block;
        }
        input {
            border: 1px solid transparent;
            background-color: #f1f1f1;
            padding: 10px;
            font-size: 16px;
        }
        input[type=text] {
            background-color: #f1f1f1;
            width: 100%;
        }
        input[type=submit] {
            background-color: DodgerBlue;
            color: #fff;
        }


    </style>

@stop

