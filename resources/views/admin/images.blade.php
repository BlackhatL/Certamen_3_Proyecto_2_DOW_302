@extends('layouts.master')

@section('contenido-principal')
<body class="bg-light">
    <div class="container bg-secondary">
        <div class="row">
            <div class="col-12 text-center">
                <h3>Administrar fotografías subidas</h3>
            </div>
        </div>
        <hr>
        <div class="col-lg-10">
            <h1>Fotografías de artistas</h1>
    
            <table class="table table-bordered table-striped table-hover bg-success">
                <tr>
                    <th class="align-middle text-nowrap">Id imagen</th>
                    <th class="align-middle text-nowrap">Titulo de la imagen</th>
                    <th class="align-middle text-nowrap">Baneada</th>
                    <th class="align-middle text-nowrap">Motivo del ban</th>
                    <th class="align-middle text-nowrap">Acciones</th>
                </tr>
                <tbody>
                    @foreach ($imagenes as $imagen)
                    <tr>
                        <td class="align-middle text-nowrap">{{$imagen->id}}</td>
                        <td class="align-middle text-nowrap">{{$imagen->titulo}}</td>
                        <td class="align-middle text-nowrap">{{$imagen->baneada}}</td>
                        <td class="align-middle text-nowrap">{{$imagen->motivo_ban}}</td>
                        <td class="align-middle text-nowrap"> 

                            

                            <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar estado de baneo
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-light">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ingrese el estado de baneo y el motivo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            
                                            <form method="POST" action="#" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="mb-3">
                                                    <label for="baneada" class="form-label">Estado de baneo</label>
                                                    <input type="string" id="baneada" name="baneada" class="form-control">

                                                    <label for="motivo_ban" class="form-label">Motivo del ban</label>
                                                    <input type="string" id="motivo_ban" name="motivo_ban" class="form-control">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Cancelar</button>
                                                    <button type="submit" class="btn btn-success text-white">Actualizar información</button>
                                                </div>
                                            </form>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
    
    
            </table>
    
    
        </div>
    </div>
</body>












@endsection