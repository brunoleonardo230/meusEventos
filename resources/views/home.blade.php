@extends('layouts.site')

@section('title') Principais Eventos - @endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Eventos</h2>
        </div>
    </div>
    <div class="row mb-4">
        @forelse($events as $event)
            <div class="col-4">
                <div class="card">
                    <img src="{{$event->banner ? asset('storage/' . $event->banner): 'https://via.placeholder.com/1080x480.png/002244?text=sem%20imagem'}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{$event->title}}</h5>
                        <strong>Acontece em {{$event->start_event->format('d/m/Y H:m:s')}}</strong>
                        <p>{{$event->description}}</p>
                        <p>Evento Organizado por: <a href="#">{{$event->owner_name}}</a></p>
                        <a href="{{route('event.single',['event' => $event->slug])}}" class="btn btn-default">Ver evento</a>
                    </div>
                </div>
            </div>
            @if(($loop->iteration % 3) == 0) </div> <div class="row mb-4"> @endif
        @empty
            <div class="col-12">
                <div class="alert alert-warning">Nenhum registro encontrado</div>
            </div>
        @endforelse
    </div>
    <div class="row">
        <div class="col-12">
            {{$events->links()}}
        </div>
    </div>
@endsection
