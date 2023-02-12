
@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="{{route('juegos.fisicos.index')}}">Juegos fisicos</a>
                <br>
                <a href="{{route('juegos.digitales.index')}}">Juegos digitales</a>

            </div>
        </div>

    </div>

@endsection
