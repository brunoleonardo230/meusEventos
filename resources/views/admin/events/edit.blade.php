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
            <form action="{{route('admin.events.update', ['event' => $event->id])}}" method="post">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Titulo Evento</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$event->title}}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Descrição Rápida Evento</label>
                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{$event->description}}">
                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Fale Mais Sobre o Evento</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror">{{$event->body}}</textarea>
                    @error('body')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Quando vai Acontecer</label>
                    <input type="text" name="start_event" class="form-control @error('body') is-invalid @enderror" value="{{$event->start_event}}">
                    @error('start_event')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-lg btn-success">Atualizar Evento</button>
            </form>
        </div>
    </div>
@endsection
