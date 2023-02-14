<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item my-2">
                <a class="nav-link" href="{{route('dashboard')}}">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item my-2">
                <a class="nav-link" href="{{route('cart.index')}}"> <i class="fas fa-shopping-cart"></i> Carrito <span style="background-color: red" id="elemsCart" class="badge badge-light">{{ \App\Helpers\CartHelper::countCart() }}</span></a>
            </li>
            <li class="nav-item my-2">
                <a class="nav-link" href="{{route('profile.edit')}}">Mi perfil</a>
            </li>
            <li class="nav-item my-2">
                <a class="nav-link" href="#">Cerrar sesion</a>
            </li>

        </ul>
    </div>
</nav>
