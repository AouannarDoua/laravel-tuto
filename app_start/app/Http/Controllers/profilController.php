<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class profilController extends Controller
{
    public function index(){

        $Profiles=Profile::paginate(10);
        return view('Profile.profilesview',compact('Profiles')); 
    }
    public function show(Profile $profile){
       // $id=(int)$request->id; //conversion de la valeur de l'id en entier
       // $profile=Profile::find($id);
            //$profile=Profile::findOrFail($id);
        /*if($profile === NULL){
            return abort(404); //page not found
        }*/
    
        return view('Profile.show',compact('profile'));
    }
  
    public function create(){
        return view('Profile.profilescreate');
    }
  
    public function store(Request $request){
        $name=$request->name;
        $email=$request->email;
        $password=Hash::make($request->password);
        $bio=$request->bio;

        //validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:profiles',
            'password' => 'required|min:9|max:30|confirmed',
            'bio'=>'required',
        ]);
        //Insertion dans bd
        Profile::create([
            'name'=>$name,
            'email'=>$email,
            'bio'=>$bio,
            'password'=>$password,
        ]);
        //Profile::create($request->POST());

        //Rediriction
        return redirect()->route('profiles.index')->with('success','Votre Compte est bien cree '.''.$name);
    }

   
   
   
    public function destroy(Profile $profile){
        
        $profile->delete();
        return redirect()->route('profiles.index')->with('success','le profil a ete bien supprimee '.''.$profile->name);
    }
  
  
  
    public function edit(Profile $profile){

        return view('Profile.profilesedit',compact('profile'));
    }
   
   
   
    public function update(Request $request , Profile $profile){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:profiles,email,'.$profile->id,
            'password' => 'required|min:9|max:30|confirmed',
            'bio'=>'required',
        ]);

        $profile->fill([
            'name'=>$request->name,
            'email'=>$request->email,
            'bio'=>$request->bio,
        ]);
        $profile->save();
        
        return redirect()->route('profiles.show',$profile->id)->with('success', 'Le profil a été mis à jour avec succès.');
    }
}
