@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="container">
            <div class="container-page">
                    <h3 class="dark-grey">Registro</h3>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-12 col-lg-6">
                                <label>NIF</label>
                                <input type="text" name="nif" class="form-control" id="" value="">
                            </div>

                            <div class="form-group col-12 col-lg-6">
                                <label>Nombre</label>
                                <input type="text" name="name" class="form-control" id="" value="">
                            </div>
                            <div class="form-group col-12 col-lg-6">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" id="" value="">
                            </div>

                            <div class="form-group col-12 col-lg-6">
                                <label>Teléfono</label>
                                <input type="text" name="phone" class="form-control" id="" value="">
                            </div>
                            <div class="form-group col-12 col-lg-6">
                                <label>Direccion</label>
                                <input type="text" name="address" class="form-control" id="" value="">
                            </div>

                            <div class="form-group col-12 col-lg-6">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" id="" value="">
                            </div>

                            <div class="form-group col-12 col-lg-6">
                                <label>Repetir contraseña</label>
                                <input type="password" name="password_confirmation" class="form-control" id="" value="">
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary" style="background-color: #3c9dd9">Register</button>
                    </form>




            </div>
        </section>
    </div>

@endsection


