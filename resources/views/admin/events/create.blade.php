@extends('layouts.app')

@section('title') Criar Evento - @endsection

@section('content')
    <div class="row">
        <div class="col-12 my-5">
            <h2>Criar Evento</h2>
        </div>
    </div>
    {{--
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $erro)
                        <li>{{$erro}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    --}}

    <div class="row">
        <div class="col-12">
            <form action="{{route('admin.events.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Titulo Evento</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Descrição Rápida Evento</label>
                    <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">
                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Fale Mais Sobre o Evento</label>
                    <textarea name="body" id="" cols="30" rows="10" class="form-control  @error('body') is-invalid @enderror">{{old('title')}}</textarea>
                    @error('body')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Quando vai Acontecer</label>
                    <input type="text" name="start_event" class="form-control @error('start_event') is-invalid @enderror" value="{{old('start_event')}}">
                    @error('start_event')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-lg btn-success">Criar Evento</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let el = document.querySelector('input[name=start_event]');
        let im = new Inputmask('99/99/9999 99:99');
        im.mask(el);
    </script>
@endsection
