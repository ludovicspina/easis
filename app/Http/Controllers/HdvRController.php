<?php

namespace App\Http\Controllers;

use App\Models\HdvR;
use Illuminate\Http\Request;

class HdvRController extends Controller
{
    public function index()
    {
        $hdvR = HdvR::all();


        return view('hdv', compact('hdvR'));
    }

    public function store(Request $request)
    {
        $post = new HdvR();
        $post->objetRecherche = $request->input('objetRecherche');
        $post->joueurRecherche = $request->input('joueurRecherche');
        $post->prixRecherche = $request->input('prixRecherche');
        $post->save();

        return redirect('hdv')->with('status', 'Archive ajoutée.');
    }
}
