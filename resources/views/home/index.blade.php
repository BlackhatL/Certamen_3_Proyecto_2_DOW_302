@extends('layouts.master')

@section('contenido-principal')
<body class="bg-light">
    


<h1 class="text-center">Web Fotógrafos</h1>
    <div class="container container-fluid text-center">
        <div class="row">
            <!--CARD Artista-->
            <!--CON ESTA PURA LINEA SE CENTRA EL CONTENIDO-->
            <div class="card-group position-absolute top-50 end-0 translate-middle-y">
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-secondary h-100">
                        <div class="card-body">
                            <h4 class="card-title">Artista</h4>
                            <p class="card-text">Vista del Artista, donde se puede subir su trabajo como fotógrafo</p>
                            <a href="{{route('artista.index')}}" class="btn btn-success">Iniciar sesión</a>
                            <a href="{{route('artista.index')}}" class="btn btn-warning">Registrarse</a>
                        </div>
                    </div>

                </div>
                <!--CARD administrador-->
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-secondary h-100">
                        <div class="card-body">
                            <h4 class="card-title">Administrador</h4>
                            <p class="card-text">Vista del Administrador, donde se puede gestionar las cuentas y el trabajo de los artistas</p>
                            <a href="{{route('admin.index')}}" class="btn btn-success">Iniciar sesión</a>
                        </div>
                    </div>

                </div>
                <!--CARD publico-->
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-secondary">
                        <div class="card-body">
                            <h4 class="card-title">Público</h4>
                            <p class="card-text">Vista del público, donde se ver el trabajo de los artistas y observar sus fotografías</p>
                            <a href="{{route('publico.index')}}" class="btn btn-success">Acceder al sitio</a>
                        </div>
                    </div>


                </div>
            </div>


        </div>

    </div>

</body>

<footer>

</footer>

@endsection