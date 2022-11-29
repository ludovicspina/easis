<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassesStatsController extends Controller
{

    public function index() {
        $chevalier = json_decode(file_get_contents('https://api.flyff.com/class/5330'));
        return view('theorycraft', compact('chevalier'));
    }
}
