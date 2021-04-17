@extends('layout.main')

@section('content')

<div class="wrapper">
    <ul class="houses-list">
        @foreach($houses as $house)
        <li class="house-logo" style="background: #{{$house->colour}};">
            <a href="house/{{$house->id}}"><img src="{{ URL::to('assets/img/houses')}}/{{$house->image}}" alt="{{$house->name}}"></a>
        </li>
        @endforeach
    </ul>
</div>

@stop
