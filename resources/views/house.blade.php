@extends('layout.main')

@section('content')

<div class="wrapper">
    <h2>{{$id->name}}<!--Nom de la maison--></h2>

    <ul class="characters-list">
        @foreach ($id->getCaracter as $character)
        <li class="character-card">
            <a href="../character/{{$character->id}}">
            <div class="avatar" style="background: #{{$id->colour}};"><img src="{{ URL::to('assets/img')}}/{{$character->image}}" alt="{{$character->first_name}}"></div>
            <div class="name">{{$character->first_name}} {{$character->last_name}}</div>
            </a>
        </li>
        @endforeach
    </ul>

</div>

@stop
