<?php

use Illuminate\Http\Request;
use App\Http\Controllers\controllertest;
use App\Http\Controllers\profilController;
use App\Http\Controllers\formationsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
GET    : Lecture
POST   : Ajouter
PUT    : Modification complete 
PATCH  : Modification partielle
DELETE : sUPPRIMER



CONNECT
OPTIONS 
 
*/
Route::get('/salam/{nom}', function (Request $request) {
    return view('salam',[
        'nom' => $request->nom,
        'prenom'=> "Aouannar",
        'cours'=>["php","laravel","MVC","DAO"],
        'age'=> "20"
    ]);
});

Route::get('/Accueil',[controllertest::class,'index']);
Route::get('/profile',[profilController::class,'index']);
Route::get('/formations',[formationsController::class,'index']);