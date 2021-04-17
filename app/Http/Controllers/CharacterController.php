<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CharacterController extends Controller
{
    public function list()
    {
        // Get all items
        $characters = Character::all();
        //dd($characters);
        return view('home-page')->with('characters', $characters);
    }

    public function character($id)
    {
      $character = Character::find($id);
      return view('character')->with('id', $character);
    }


}
