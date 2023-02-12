@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="container">
            <div class="row">
                <div class="col-12">
                    <h1>@if($juegosF) Juegos Fisicos @else Juegos Digitales @endif</h1>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID Juego</th>
                            <th scope="col">Título</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Ver datalles</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($juegos as $juego)
                        <tr>
                            <th scope="row">{{$juego->id}}</th>
                            <td>{{$juego->titulo}}</td>
                            <td>
                                <img src="{{$juego->imagen_path}}" style="width: 40px;height: 40px">
                            </td>
                            <td>
                                <a href="{{route('juegos.detalle',$juego->id)}}" class="btn btn-success">Ver</a>
                            </td>
                        </tr>
                        @endforeach


                        </tbody>
                    </table>





                </div>
            </div>
        </section>
    </div>

@endsection

