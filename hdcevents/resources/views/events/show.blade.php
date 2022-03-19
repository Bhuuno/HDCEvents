@extends('layouts.padrao')
@section('titulo','$event->title')
@section('nomecss','/css/styles.css')
@section('conteudo')
    <div class="col-md-10 offset-md-i">
        <div class="row">
            <div id="image-container" class="col-md-6">
                <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>
                    {{$event->title}}
                </h1>
                <p clss="event-city"><ion-icon name="location-outline"></ion-icon>{{$event->city}}</p>
                <p class="events-participants"><ion-icon name="people-outline"></ion-icon>X Participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon>Dono do Evento</p>
                <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
                <h3>O evento conta com: </h3>
                <ul id="itens-list">
                    @foreach($event->items as $item)
                        <li><ion-icon name="play-outline"></ion-icon><span>{{ $item }}</span></li>
                    @endforeach
            </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o evento: </h3>
                <p class="event-description">{{$event->description}}</p>
            </div>
        </div>
    </div>
@endsection
