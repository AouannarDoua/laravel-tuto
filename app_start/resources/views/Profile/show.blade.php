{{--@section('title')
Profile
@endsection
@extends('layouts.master')
@section('main')
 
@endsection--}}
<x-master title="Profile"><h3>Profiles:</h3>
    {{$profile->id}}<br>
    {{$profile->name}}<br>
    {{$profile->email}}<br>

</x-master>