<?php

use Illuminate\Http\Request;
use App\Http\Controllers\controllertest;
use App\Http\Controllers\profilController;
use App\Http\Controllers\formationsController;
use App\Http\Controllers\Auth\AuthController;

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




Route::get('/profiles',[profilController::class,'index'])->name('profiles.index');

Route::get('/profiles/{profile}',[profilController::class,'show'])->where('profile','\d+')->name('profiles.show');

Route::delete('/profiles/{profile}',[profilController::class,'destroy'])->name('profiles.destroy');

Route::get('/profiles/{profile}/edit',[profilController::class,'edit'])->name('profiles.edit');

Route::put('/profiles/{profile}',[profilController::class,'update'])->name('profiles.update');

Route::get('/profiles/create',[profilController::class,'create'])->name('profiles.create');

Route::post('/profiles/store',[profilController::class,'store'])->name('profiles.store');

Route::get('/profiles/search', [profilController::class, 'search'])->name('profiles.search');

Route::get('/formations',[formationsController::class,'index'])->name('formationpage');


Route::get('/Accueil', [AuthController::class,'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/logout', [AuthController::class,'logout'])->name('logout');



Route::get('/register', [AuthController::class,'Register'])->name('Register');

Route::post('/postregistration', [AuthController::class,'postregistration'])->name('registration.post');

Route::post('/postlogin', [AuthController::class,'postlogin'])->name('login.post');