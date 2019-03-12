@extends('layout')
@section('title')
    Players
@endsection

@section('headerTitle')
    <h1>My players</h1>
@endsection

@section('content')
    <ul class="list-group">
        @foreach($players as $player)
            <li class="list-group-item w-25">
                <a href="/players/{{$player->id}}">
                    {{$player->firstname}} {{$player->lastname}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection