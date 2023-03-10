@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <section class="container">
            <div class="row">
                <div class="col-12" style="margin-bottom: 30px">
                    <form action="{{route('juegos.buscar',)}}" method="post">
                        @csrf
                        <input type="hidden" name="tipoJuego" value="{{$juegosF}}">
                        <input class="form-control" type="search" placeholder="Buscar juego..." name="patronbusqueda">
                            <button class="btn btn-primary" type="submit">Buscar</button>
                    </form>
                </div>
                <div class="col-12">
                    <h1>@if($juegosF)
                            Juegos Fisicos
                        @else
                            Juegos Digitales
                        @endif
                    </h1>
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID Juego</th>
                            <th scope="col">Título</th>
                            <th scope="col">Género</th>
                            <th scope="col">Descuento</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Ver datalles</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($juegos as $juego)
                            <tr>
                                <th scope="row">{{$juego->id}}</th>
                                <td>{{$juego->titulo}}</td>
                                <td>{{$juego->genero}}</td>
                                <td>{{$juego->descuento}}%</td>
                                <td>
                                    <img src="{{$juego->imagen_path}}" style="width: 40px;height: 40px">
                                </td>
                                <td>
                                    @if($juego->juego_digital==0)
                                        <p>{{$juego->stock}} uds.</p>
                                    @else
                                        <p>-</p>
                                    @endif
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

