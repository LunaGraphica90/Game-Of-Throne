<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HouseController extends Controller
{
    public function list()
    {
        // Get all items
        $houses = House::all();
        //dd($houses);
        return view('houses')->with('houses', $houses);
    }

    public function house($id)
    {
      $house = House::find($id)->load('getCaracter');
      return view('house')->with('id', $house);
    }


}
