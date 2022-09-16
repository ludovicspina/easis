<?php

namespace App\Http\Controllers;

use App\Models\Hdv;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HdvController extends Controller
{
    public function index()
    {
        $hdv = Hdv::select('*')
            ->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('hdv',  compact('hdv'));
    }

    public function store(Request $request)
    {
        $post = new Hdv();
        $post->objet = $request->input('objet');
        $post->joueur = $request->input('joueur');
        $post->prix = $request->input('prix');
        $post->quantite = $request->input('quantite');
        $post->typeRequete = $request->input('typeRequete');
        $post->region = $request->input('region');
        $post->serveur = $request->input('serveur');
        $post->for = $request->input('for');
        $post->end = $request->input('end');
        $post->dex = $request->input('dex');
        $post->int = $request->input('int');
        $post->eveil = $request->input('eveil');
        $post->niveau = $request->input('niveau');
        $post->eau = $request->input('eau');
        $post->feu = $request->input('feu');
        $post->terre = $request->input('terre');
        $post->foudre = $request->input('foudre');
        $post->vent = $request->input('vent');


        $post->save();

        return redirect('hdv')->with('status', 'Archive ajoutée.');
    }
}
