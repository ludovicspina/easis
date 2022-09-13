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

        $post->save();

        return redirect('hdv')->with('status', 'Archive ajoutée.');
    }
}
