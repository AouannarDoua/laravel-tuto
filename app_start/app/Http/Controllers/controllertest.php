<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllertest extends Controller
{
     public function index(Request $request){
        //$nom = $request->nom;
        $nom = "doua";
        $age = NULL;
        //$langages =[];
        $langages =["php","laravel","Symfony","React.js"];
        $color = "";
        $genre ="femme";
        $n1=19;
        $n2=20;
        return view('controllertestview',compact('nom','langages','age','color','n1','n2'));
    
    }
}
