@extends('layouts.master')

@section('contenido-principal')
<body class="bg-light">
    


<h1 class="text-center">Administrador</h1>
    <div class="container container-fluid text-center">
        <div class="row d-flex">
            <div class="card-group position-absolute top-50 end-20 translate-middle-y">
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-secondary h-100">
                        <div class="card-body">
                            <h4 class="card-title">Administrar usuarios</h4>
                            <a href="{{route('admin.users')}}" class="btn btn-success">Administrar</a>
                        </div>
                    </div>

                </div>
                <!--CARD administrador-->
                <div class="col-sm-4 mb-3 mb-sm-0">

                    <div class="card text-bg-secondary h-100">
                        <div class="card-body">
                            <h4 class="card-title">Administrar Fotos</h4>
                            <a href="{{route('admin.images')}}" class="btn btn-success">Administrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection