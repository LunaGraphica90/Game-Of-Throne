@extends('layout.main')

@section('content')

<div class="wrapper">

        <ul class="characters-list">
            @foreach($characters as $character)
            <li class="character-card">
            <a href="character/{{$character->id}}">

                <div class="avatar" style="background: #{{$character->getHouse[0]->colour}};">
                    <img src="{{ URL::to('assets/img')}}/{{$character->image}}" alt="{{$character->first_name}}">
                </div>
                <div class="name">{{$character->first_name}} {{$character->last_name}}</div>
            </a>
            </li>
            @endforeach
    </ul>
</div>

@stop


