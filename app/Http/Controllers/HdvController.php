<?php

namespace App\Http\Controllers;

use App\Models\Api;
use App\Models\Hdv;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class HdvController extends Controller
{
    public function index()
    {

        $items = Api::select('nameFr')->get();
        $icons = Api::select('icon')->get();
        $itemsId = Api::select('itemId')->get();

        $hdv = Hdv::select('*')
            ->where('isShowed', '=', 1)
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('hdv', compact('hdv', 'items', 'icons', 'itemsId'));
    }

    public function getAll()
    {
        $hdvCount = Hdv::select('*')
            ->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->orderBy('created_at', 'DESC')
            ->count();

        $lastPost = Hdv::select('objet', 'joueur', 'prix')
            ->orderby('id', 'desc')
            ->get();

        $iconsItems = DB::table('hdvs')
            ->join('apis', 'apis.nameFr', '=', 'hdvs.objet')
            ->select('apis.icon', 'apis.nameFr')
            ->orderby('hdvs.id', 'desc')
            ->get();

        return view('home', compact('hdvCount', 'lastPost', 'iconsItems'));
    }

    public function store(Request $request)
    {


        $statRadio = $request->input('statRadio');
        $statInput = $request->input('statInput');

        $for = null;
        $end = null;
        $dex = null;
        $int = null;

        if ($statRadio == 'for') {
            $for = $statInput;
        } elseif ($statRadio == 'end') {
            $end = $statInput;
        } elseif ($statRadio == 'dex') {
            $dex = $statInput;
        } elseif ($statRadio == 'int') {
            $int = $statInput;
        }

        $elementRadio = $request->input('elementRadio');
        $elementInput = $request->input('elementInput');

        $eau = null;
        $feu = null;
        $terre = null;
        $foudre = null;
        $vent = null;

        if ($elementRadio == 'eau') {
            $eau = $elementInput;
        } elseif ($elementRadio == 'feu') {
            $feu = $elementInput;
        } elseif ($elementRadio == 'terre') {
            $terre = $elementInput;
        } elseif ($elementRadio == 'foudre') {
            $foudre = $elementInput;
        } elseif ($elementRadio == 'vent') {
            $vent = $elementInput;
        }




        $post = new Hdv();
        $post->objet = $request->input('objet');
        $post->joueur = $request->input('joueur');
        $post->prix = $request->input('prix');
        $post->quantite = $request->input('quantite');
        $post->typeRequete = $request->input('typeRequete');
        $post->region = $request->input('region');
        $post->serveur = $request->input('serveur');
        $post->for = $for;
        $post->end = $end;
        $post->dex = $dex;
        $post->int = $int;
        $post->eveil = $request->input('eveil');
        $post->niveau = $request->input('niveau');
        $post->eau = $eau;
        $post->feu = $feu;
        $post->terre = $terre;
        $post->foudre = $foudre;
        $post->vent = $vent;
        $post->userId = $request->input('userId');
        $post->patk = $request->input('patk');
        $post->pdef = $request->input('pdef');
        $post->ppv = $request->input('ppv');
        $post->pmp = $request->input('pmp');
        $post->ppf = $request->input('ppf');


        $post->save();

        return redirect('hdv')->with('status', 'Archive ajoutée.');
    }

    public function hide($id)
    {
        $request = Hdv::find($id);

        if ($request->userId = auth()->user()->id) {
            $request->isShowed = False;
            $request->save();
        }

        return redirect('hdv')->with('status', 'Archive supprimée.');
    }
}
