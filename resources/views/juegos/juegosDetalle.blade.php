@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <section class="container">
            <div class="row">
                <div class="col-6">
                    <img src="{{$juego->imagen_path}}" style="width: 400px;height: 400px">
                </div>
                <div class="col-6">
                    <p>Titulo: {{$juego->titulo}}</p>
                    <p>Genero: {{$juego->genero}}</p>
                    <p>Edad recomendada: {{$juego->edad_recomendada}}años</p>
                    <p>Precio: {{$juego->precio}}€</p>
                    <p>Stock: {{$juego->stock}} unidades</p>
                    <p>Descuento: {{$juego->descuento}}%</p>
                    <p>Juego Digital: {{$juego->juego_digital==1 ? 'Si' : ' No'}}</p>
                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-primary" type="button" id="btn_add_cart">Añadir al carrito</button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <script>
        const btnAddCart = document.getElementById('btn_add_cart');
        btnAddCart.addEventListener('click',()=>{
            $.ajax({
                url: '{{route("add.cart")}}',
                type: 'post',
                data: {
                    _token: '{{csrf_token()}}',
                    juegoId: '{{$juego->id}}'
                },
                success: function (data) {
                   toastr.success('Producto añadido al carrito')

                }
            });

        })


    </script>
@endsection

