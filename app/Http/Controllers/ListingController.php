<?php

namespace App\Http\Controllers;

use App\Models\Api;
use App\Models\Hdv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    public function showAll()
    {
        $items = Hdv::select('*')
            ->where('isShowed', '=', 1)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('listing', compact('items'));
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
        $post->userId = $request->input('userId');
        $post->patk = $request->input('patk');
        $post->pdef = $request->input('pdef');
        $post->ppv = $request->input('ppv');
        $post->pmp = $request->input('pmp');
        $post->ppf = $request->input('ppf');

        $post->save();

        return redirect('listing')->with('status', 'Archive ajoutée.');
    }

    public function items()
    {
        $allIds = json_decode(file_get_contents('https://api.flyff.com/item'));
        $allItems = [];
        $groupIds = [];
        $groupItems = [];
        $counter = 0;
        $void = [];

        DB::table('apis')
            ->delete();

        /* foreach (range(0, 1000) as $index) {
            if (array_key_exists($index, $allIds)) {
                $groupIds[] = $allIds[$index];
                $counter += 1;
                if ($counter == 1000) {
                    $tmp = json_decode(file_get_contents('https://api.flyff.com/item/' . implode(',', $groupIds)));
                    foreach ($tmp as $unique) {
                        $post = new Api();
                        $post->itemId = $unique->id;
                        $post->nameFr = $unique->name->fr;
                        $post->nameEn = $unique->name->en;
                        $post->icon = $unique->icon;
                        $post->testnumber = $index;
                        $post->save();
                    }

                    $counter = 0;
                    $groupIds = $void;
                }
            } else {
                break;
            }
        } */


        foreach ($allIds as $anId) {
            $groupIds[] = $anId;
            $counter += 1;
            if ($counter == 1000) {
                $tmp = json_decode(file_get_contents('https://api.flyff.com/item/' . implode(',', $groupIds)));
                foreach ($tmp as $unique) {
                    $post = new Api();
                    $post->itemId = $unique->id;
                    $post->nameFr = $unique->name->fr;
                    $post->nameEn = $unique->name->en;
                    $post->icon = $unique->icon;
                    $post->testnumber = $counter;
                    $post->save();
                }
                $counter = 0;
                $groupIds = $void;
            }

            if ($anId == end($allIds)) {
                $tmp = json_decode(file_get_contents('https://api.flyff.com/item/' . implode(',', $groupIds)));
                foreach ($tmp as $unique) {
                    $post = new Api();
                    $post->itemId = $unique->id;
                    $post->nameFr = $unique->name->fr;
                    $post->nameEn = $unique->name->en;
                    $post->icon = $unique->icon;
                    $post->testnumber = $counter;
                    $post->save();
                }
                $counter = 0;
                $groupIds = $void;
            }
        }


        return view('listing', compact('allItems'));

    }

}
