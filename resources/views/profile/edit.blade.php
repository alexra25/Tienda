@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="container">
            <div class="container-page">
                <div class="row">
                    <div class="col-12">
                        <h3 class="dark-grey">Editar perfil</h3>
                        <form method="post" action="{{ route('profile.update') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12 col-lg-6">
                                    <label>NIF</label>
                                    <input type="text" name="nif" class="form-control" id="" value="{{$user->nif}}">
                                </div>

                                <div class="form-group col-12 col-lg-6">
                                    <label>Nombre</label>
                                    <input type="text" name="name" class="form-control" id="" value="{{$user->name}}">
                                </div>
                                <div class="form-group col-12 col-lg-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" id="" value="{{$user->email}}">
                                </div>

                                <div class="form-group col-12 col-lg-6">
                                    <label>Teléfono</label>
                                    <input type="text" name="phone" class="form-control" id="" value="{{$user->phone}}">
                                </div>
                                <div class="form-group col-12 col-lg-6">
                                    <label>Direccion</label>
                                    <input type="text" name="address" class="form-control" id="" value="{{$user->address}}">
                                </div>

                                <div class="form-group col-12 col-lg-6">
                                    <label>Password (Dejar en blanco para mantener la misma)</label>
                                    <input autocomplete="new-password" type="password" name="password" class="form-control" id="" value="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #3c9dd9">Actualizar perfil</button>
                        </form>

                    </div>
                    <div class="col-12">
                        <h1>Pedidos</h1>

                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID Pedido</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Precio</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pedidos as $pedido)
                                <tr>
                                    <th scope="row">{{$pedido->id}}</th>
                                    <td>{{\Carbon\Carbon::parse($pedido->created_at)->format('d-m-Y H:i:s') }}</td>
                                    <td>{{$pedido->precioTotal}}€</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>


            </div>
        </section>
    </div>

@endsection


