@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <section class="container">
            <div class="row">

                <div class="col-12">

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
                        @foreach($carrito as $juego)
                            <tr>
                                <th scope="row">{{$juego->juego->id}}</th>
                                <td>{{$juego->juego->titulo}}</td>
                                <td>{{$juego->juego->genero}}</td>
                                <td>{{$juego->juego->descuento}}%</td>
                                <td>
                                    <img src="{{$juego->juego->imagen_path}}" style="width: 40px;height: 40px">
                                </td>
                                <td>
                                    @if($juego->juego->juego_digital==0)
                                        <p>{{$juego->juego->stock}} uds.</p>
                                    @else
                                        <p>-</p>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('juegos.detalle',$juego->juego->id)}}" class="btn btn-success">Ver</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>

                <div class="col-12">
                    <a href="{{route('pay.cart')}}" style="color: white;background: blue" class="btn btn-primary">Pagar ({{$precioTotal}}€)</a>
                </div>
            </div>
        </section>
    </div>

@endsection

