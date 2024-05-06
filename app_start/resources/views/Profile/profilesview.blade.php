{{--@section('title')
Profile
@endsection
@extends('layouts.master')
@section('main')
 
@endsection--}}
<x-master title="Profile">
    <div class="m-3">
    <h3>Profiles:</h3>
    <hr>

        <h1 class="text-center pt-4"> Search </h1><br>
        <form method="GET" action="{{ route('profiles.search') }}">
            <div class="row py-2">
                <div class="col-md-6">
                    <label for="name">Name:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="namesearch" class="form-control" placeholder="Search by name..." value="{{ isset($searchname) ?$searchname : '' }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="email">Email:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="emailsearch" class="form-control" placeholder="Search by email..." value="{{ isset($searchemail) ? $searchemail: '' }}">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center py-2"> 
                <div class="col-md-6">
                    <label for="bio">Bio:</label>
                    <div class="input-group mb-3">
                        <input type="text" name="biosearch" class="form-control" placeholder="Search by bio..." value="{{ isset($searchbio) ? $searchbio : '' }}">
                    </div>
                </div>
                <div class="col-md-2 mt-4"> 
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </div>
            </div>
        </form>
        
   @if ($Profiles->count()>0)
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
@else
<div class="row my-4 mx-2">
    <x-alert type="danger">
     This Profile not found
    </x-alert>
  </div>
  @endif
    </div>
</x-master>