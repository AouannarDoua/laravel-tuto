{{--@section('title')
Profile
@endsection
@extends('layouts.master')
@section('main')
 
@endsection--}}
<x-master title="Profile"><h3>Profiles:</h3>
<table class="table">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Email</th>
        <th>bio</th>
        <th>Actions</th>
    </tr>
        <tr>
        @foreach ($Profiles as $Profile)
            <td>{{$Profile->id}}</td>
            <td>{{$Profile->name}}</td>
            <td>{{$Profile->email}}</td>
            <td>{{Str::limit($Profile->bio,50,"......etc")}}</td>
            <td>
                <div class="d-flex">
                    <a class="btn btn-primary me-2" href="{{route('profiles.show',$Profile->id)}}" role="button">Afficher plus</a>
                    <form action="{{route('profiles.destroy',$Profile->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger  me-2">Supprimer</button>
                    </form>
                    <a class="btn btn-success" href="{{route('profiles.edit',$Profile->id)}}" role="button">Modifier</a>
                </div>
            </td>
           
        </tr>
        @endforeach
       
</table>
{{$Profiles->Links()}}

<a class="btn btn-primary" href="{{route('profiles.create')}}"  role="button" >Ajouter un profile</a>


</x-master>