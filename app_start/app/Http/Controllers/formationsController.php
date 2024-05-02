<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formationsController extends Controller
{
    public function index(){
        $users = [
            ['id'=> '1', 'nom' => 'Doua' , 'metier' =>  'Expert technique'],
            ['id'=> '2', 'nom' => 'Maram' , 'metier' =>  'Directeur'],
            ['id'=> '3', 'nom' => 'Oualid' , 'metier' =>  'ingenieur'],
        ];
        return view('informationview',compact('users')); 
    }
}
