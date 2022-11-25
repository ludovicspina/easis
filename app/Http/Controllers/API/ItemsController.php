<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Api;
use Illuminate\Http\Request;
use mysql_xdevapi\Collection;

class ItemsController extends Controller
{
    public function index()
    {
        $items = Api::select('nameFr')->get();
        return response()->json($items);
    }
}
