@extends('layouts.app')

@section('title') Editar Evento - @endsection

@section('content')
    <div class="row">
        <div class="col-12 my-5">
            <h2>Editar Evento</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/admin/events/update/{{$event->id}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Titulo Evento</label>
                    <input type="text" name="title" class="form-control" value="{{$event->title}}">
                </div>
                <div class="form-group">
                    <label>Descrição Rápida Evento</label>
                    <input type="text" name="description" class="form-control" value="{{$event->description}}">
                </div>
                <div class="form-group">
                    <label>Fale Mais Sobre o Evento</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$event->body}}</textarea>
                </div>
                <div class="form-group">
                    <label>Quando vai Acontecer</label>
                    <input type="text" name="start_event" class="form-control" value="{{$event->start_event}}">
                </div>
                <button type="submit" class="btn btn-lg btn-success">Atualizar Evento</button>
            </form>
        </div>
    </div>
@endsection
