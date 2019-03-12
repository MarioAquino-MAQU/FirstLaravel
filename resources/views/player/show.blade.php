@extends('layout')
@section('title')
    Player
@endsection

@section('headerTitle')
    <h1>{{$player->firstname}} {{$player->lastname}}</h1>
@endsection

@section('content')
    <a href="/players/{{$player->id}}/edit">Edit</a>
@endsection