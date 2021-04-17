<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//-------------------PAGE D'ACCUEIL-------------------//
Route::get( '/', 'CharacterController@list');

//-------------------PAGE PERSONNAGE-------------------//
Route::get( '/character/{id}', 'CharacterController@character',);

//-------------------PAGE LISTE MAISONS -------------------//
Route::get( '/house', 'HouseController@list');

//-------------------PAGE MAISON SEULE-------------------//
Route::get( '/house/{id}', 'HouseController@house');


