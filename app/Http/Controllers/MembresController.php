<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembresController extends Controller
{
    public function index()
    {
        $members = Members::all();

        return view('membres', compact('members'));
    }
}
