<?php

namespace App\Http\Controllers;

use App\Models\Cdg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CdgController extends Controller
{
    public function __construct()
    {
        $this->middleware('membre');
    }

    public function index()
    {
        $cdgList = Cdg::all();

        $cdgIteration = Cdg::select('joueur', DB::raw('count(*) as count'))
            ->groupBy('joueur')
            ->orderBy('count', 'ASC')
            ->get();

        $clockworks = file_get_contents("https://api.flyff.com/monster/4611");
        $clockworksJson = json_decode($clockworks);
        $clockworksItemIds = array_map(function ($drop) {
            return $drop->item;
        }, $clockworksJson->drops);

        $meteonyker = file_get_contents("https://api.flyff.com/monster/8745");
        $meteonykerJson = json_decode($meteonyker);
        $meteonykerItemIds = array_map(function ($drop) {
            return $drop->item;
        }, $meteonykerJson->drops);

        $itemsClock = file_get_contents('https://api.flyff.com/item/' . implode(',', $clockworksItemIds));
        $itemsMeteo = file_get_contents('https://api.flyff.com/item/' . implode(',', $meteonykerItemIds));

        $clockItemsJson = json_decode($itemsClock);
        $meteoItemsJson = json_decode($itemsMeteo);

        return view('cdgArchives', compact('cdgList', 'cdgIteration', 'clockItemsJson', 'meteoItemsJson'));
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
