@extends('layouts.master')

@section('contenido-principal')


<body class="bg-light">
    

<div class="container bg-secondary">
    <div class="row">
        <div class="col-12 text-center">
            <h3>Bienvenido a la vista Artistas</h3>
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <h4>Subir su Trabajo como artista</h4>
        </div>
    </div> 
    <hr>
    <div class="row align-items-center">
        <div class="col-6 col-lg-4">
            <div class="card">
                <div class="card-header bg-dark text-white">Subir foto</div>
                <div class="card-body">
                    <form method="POST" action={{route('artista.store')}} enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título de la foto</label>
                            <input type="text" id="titulo" name="titulo" class="form-control">
                            <label for="cuenta_user" class="form-label">Nombre de usuario</label>
                            <input type="text" id="cuenta_user" name="cuenta_user" class="form-control">
                        </div>
                        <div class="input-group">
                            <input type="file" name="archivo" class="form-control" id="archivo" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <button class="btn btn-success" type="sumbit" id="archivo">Subir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-dark text-white">Retroalimentación de Administradores</div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover bg-success">
                        <tr>
                            <th class="align-middle text-nowrap">Id imagen</th>
                            <th class="align-middle text-nowrap">Titulo de la imagen</th>
                            <th class="align-middle text-nowrap">Baneada</th>
                            <th class="align-middle text-nowrap">Motivo del ban</th>
                        </tr>
                        <tbody>
                            @foreach ($imagenes as $imagen)
                            <tr>
                                <td class="align-middle text-nowrap">{{$imagen->id}}</td>
                                <td class="align-middle text-nowrap">{{$imagen->titulo}}</td>
                                <td class="align-middle text-nowrap">{{$imagen->baneada}}</td>
                                <td class="align-middle text-nowrap">{{$imagen->motivo_ban}}</td>
                            </tr>
                            @endforeach
                        </tbody>


                    </table>
                </div>
            </div>
            
        </div>
    </div>
</div>


</body>





@endsection