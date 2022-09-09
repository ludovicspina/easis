<?php

namespace App\Http\Controllers;

use App\Models\Cdg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CdgController extends Controller
{
    public function index()
    {
        $cdgList = Cdg::all();

        $cdgIteration = Cdg::select('joueur', DB::raw('count(*) as count'))
            ->groupBy('joueur')
            ->orderBy('count', 'ASC')
            ->get();


        return view('cdgArchives', compact('cdgList', 'cdgIteration'));
    }

    public function store(Request $request)
    {
        $post = new Cdg();
        $post->objet = $request->input('objet');
        $post->joueur = $request->input('joueur');
        $post->save();

        return redirect('cdgArchives')->with('status', 'Archive ajoutée.');
    }

}
