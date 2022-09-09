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

        $response = file_get_contents("https://api.flyff.com/monster/4611");
        $responseJson = json_decode($response);
        $itemIds = array_map(function ($drop) {
            return $drop->item;
        }, $responseJson->drops);
        $items = file_get_contents('https://api.flyff.com/item/' . implode(',', $itemIds));
        $itemsJson = json_decode($items);


        return view('cdgArchives', compact('cdgList', 'cdgIteration', 'itemsJson'));
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
