@extends('layout')
@section('title')
    Create Player
@endsection

@section('headerTitle')
    <h1>Create player</h1>
@endsection

@section('content')
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="/players">
        @csrf
        <p>
            <label>Firstname</label>
            <input type="text" name="firstname" placeholder="Firstname"/>
        </p>
        <p>
            <label>Lastname</label>
            <input type="text" name="lastname" placeholder="Lastname"/>
        </p>
        <p>
            <label>Age</label>
            <input type="number" name="age" min="16" max="45" value="25"/>
        </p>
        <input type="submit" value="Save">
    </form>
@endsection