<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Session;

class AuthController extends Controller
{
   
    public function Register(){
        return view('auth.registration');
    }

  

    public function postregistration(Request $request){
        // Récupère les données du formulaire
        $name=$request->name;
        $email=$request->email;
        $password = Hash::make($request->password);

        // Valide les données du formulaire
        $request->validate([
            'name'=>'required',
            'email'=> 'required|email|unique:users',
            'password'=>'required|min:6',
        ]);
        
        // Crée un nouvel utilisateur dans la base de données
        User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
        ]);

        return redirect()->route('Register')->with('success','You are registered successfully');
    }


    public function postlogin(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('success', 'You are successfully logged in');
        } else {
            return redirect()->route('Register')->with('success', 'Invalid credentials. Please try again.');
        }
    }


    public function dashboard(){
        if(Auth::check()){
            return view('controllertestview');
        }
        return redirect()->route('Register')->with('success', 'Please login to access the dashboard page');
    }


    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('Register');
    }

}