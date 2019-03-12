@extends('layout')
@section('title')
    Edit Player
@endsection

@section('headerTitle')
    <h1>Edit player</h1>
@endsection

@section('content')
    <form method="POST" action="/players/{{$player->id}}">
        @csrf
        @method('PATCH')
        <p>
            <label>Firstname</label>
            <input type="text" name="firstname" value="{{$player->firstname}}"/>
        </p>
        <p>
            <label>Lastname</label>
            <input type="text" name="lastname" value="{{$player->lastname}}"/>
        </p>
        <p>
            <label>Age</label>
            <input type="number" name="age" min="16" max="45" value="{{$player->age}}"/>
        </p>
        <input type="submit" value="Update">
    </form>

    <form method="POST" action="/players/{{$player->id}}">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete">
    </form>
@endsection