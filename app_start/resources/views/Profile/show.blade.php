{{--@section('title')
Profile
@endsection
@extends('layouts.master')
@section('main')
 
@endsection--}}
<x-master title="Profile">
    <div class="m-3"><h3>Profiles:</h3>
    {{$profile->id}}<br>
    {{$profile->name}}<br>
    {{$profile->email}}<br>
    </div>
</x-master>