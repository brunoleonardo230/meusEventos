@extends('layouts.app')

@section('title') Criar Evento - @endsection

@section('content')
    <div class="row">
        <div class="col-12 my-5">
            <h2>Criar Evento</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/admin/events/store" method="post">
                @csrf
                <div class="form-group">
                    <label>Titulo Evento</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label>Descrição Rápida Evento</label>
                    <input type="text" name="description" class="form-control">
                </div>
                <div class="form-group">
                    <label>Fale Mais Sobre o Evento</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Quando vai Acontecer</label>
                    <input type="text" name="start_event" class="form-control">
                </div>
                <button type="submit" class="btn btn-lg btn-success">Criar Evento</button>
            </form>
        </div>
    </div>
@endsection
