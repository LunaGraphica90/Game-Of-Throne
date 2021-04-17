@extends('layout.main')

@section('content')

<div class="wrapper">
    <section class="character-page">
        <div class="col-8">
            <h2>{{$id->first_name}} {{$id->last_name}}</h2>
            <div class="bio">
                <h3>Biographie</h3>
                <p>{{$id->biography}}</p>
            </div>
        </div>
        <div class="col-4">

            <div class="avatar" style="background: #{{$id->getHouse[0]->colour}};">

                <img src="{{ URL::to('assets/img')}}/{{$id->image}}" alt="{{$id->first_name}}">
            </div>
            <div class="infos">
                <h3>Maisons</h3>
                    <div class="houses">
                        <ul>
                            @foreach($id->getHouse as $house)
                            <li class="house-logo" style="background: #{{$house->colour}};">
                                <a href="{{ URL::to('/house')}}/{{$house->id}}"><img src="{{ URL::to('assets/img/houses')}}/{{$house->image}}" alt="{{$house->name}}"></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                <ul class="meta">
                    <li><span>Rang : </span>{{$id->getTitle()}}</li>

                    <li><span>Mère : </span>
                        @if(is_null($id->mother_id))
                            Non renseigné
                        @else
                            {{ $id->getMother()}}
                        @endif
                    </li>

                    <li><span>Père : </span>
                        @if(is_null($id->mother_id))
                            Non renseigné
                        @else
                            {{ $id->getFather()}}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>

@stop
