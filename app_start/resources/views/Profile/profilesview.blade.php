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
            <td><a  class="btn btn-primary" href="{{route('profiles.show',$Profile->id)}}" role="button">Afficher plus</a></td>
           
        </tr>
        @endforeach
      
       
</table>
{{$Profiles->Links()}}


</x-master>