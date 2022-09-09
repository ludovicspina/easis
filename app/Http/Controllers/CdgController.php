<?php

namespace App\Http\Controllers;

use App\Models\Cdg;
use Illuminate\Http\Request;

class CdgController extends Controller
{
    public function index()
    {
        $cdgList = Cdg::all();
        return view('dashboard', compact('cdgList'));
    }

    public function store(Request $request)
    {
        $post = new Cdg();
        $post->objet = $request->input('objet');
        $post->joueur = $request->input('joueur');
        $post->save();

        return redirect('dashboard')->with('status', 'Archive ajoutée.');
    }
}
