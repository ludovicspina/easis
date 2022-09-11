<?php

namespace App\Http\Controllers;

use App\Models\HdvO;
use App\Models\HdvR;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HdvOController extends Controller
{
    public function index()
    {
        $hdvO = HdvO::select('*')
            ->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->get();
        $hdvR = HdvR::select('*')
            ->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->get();


        return view('hdv', compact('hdvO', 'hdvR'));
    }

    public function store(Request $request)
    {
        $post = new HdvO();
        $post->objetOffre = $request->input('objetOffre');
        $post->joueurOffre = $request->input('joueurOffre');
        $post->prixOffre = $request->input('prixOffre');
        $post->save();

        return redirect('hdv')->with('status', 'Archive ajoutée.');
    }
}
