<?php

namespace App\Http\Controllers;

use App\Models\Api;
use Illuminate\Http\Request;

class Hdv2Controller extends Controller
{
    public function index() {
        $items = Api::select('nameFr')->get();
        $icons = Api::select('icon')->get();

        $all = Api::all();
        dd($all);
        return view('new-hdv', compact('items', 'icons'));
    }


}
