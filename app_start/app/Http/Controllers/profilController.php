<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
class profilController extends Controller
{
    public function index(){

        $Profiles=Profile::paginate(10);
        return view('Profile.profilesview',compact('Profiles')); 
    }
    public function show(Request $request){
        $id=(int)$request->id; //conversion de la valeur de l'id en entier
        $profile=Profile::find($id);
            //$profile=Profile::findOrFail($id);
        /*if($profile === NULL){
            return abort(404);
        }*/
    
        return view('Profile.show',compact('profile'));
    }
}
