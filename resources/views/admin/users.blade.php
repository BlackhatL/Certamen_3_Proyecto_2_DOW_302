
@extends('layouts.master')

@section('contenido-principal')
<body class="bg-light">

    <div class="row">
        <div class="col-12 text-center">
            <h3>Administrar cuentas</h3>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-striped table-hover bg-success">
                    <tr>
                        <th class="align-middle text-nowrap">Nombre de usuario</th>
                        <th class="align-middle text-nowrap">Contraseña</th>
                        <th class="align-middle text-nowrap">Nombre</th>
                        <th class="align-middle text-nowrap">apellido</th>
                        <th class="align-middle text-nowrap">Tipo de cuenta</th>
                        <th class="align-middle text-nowrap">Acción</th>
                    </tr>
                    <tbody>
                        @foreach ($cuentas as $cuentas)
                        <tr>
                            <td class="align-middle text-nowrap">{{$cuentas->user}}</td>
                            <td class="align-middle text-nowrap">{{$cuentas->password}}</td>
                            <td class="align-middle text-nowrap">{{$cuentas->nombre}}</td>
                            <td class="align-middle text-nowrap">{{$cuentas->apellido}}</td>
                            <td class="align-middle text-nowrap">{{$cuentas->perfil_id}}</td>
                            <td class="align-middle text-nowrap"> 

                                <form method="POST" action="{{route('admin.destroy',$cuentas->user)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Borrar usuario</button>
                                </form>

                                <button type="button" class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Editar usuario
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-light">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ingrese los nuevos datos del usuario</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                <form method="POST" action="{{ route('admin.users', $cuentas->user)}}" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="mb-3">
                                                        <label for="user" class="form-label">Nombre de Usuario</label>
                                                        <input type="string" id="user" name="user" class="form-control">

                                                        <label for="password" class="form-label">Contraseña</label>
                                                        <input type="string" id="password" name="password" class="form-control">

                                                        <label for="nombre" class="form-label">Nombre</label>
                                                        <input type="string" id="nombre" name="nombre" class="form-control">

                                                        <label for="apellido" class="form-label">Apellido</label>
                                                        <input type="string" id="apellido" name="apellido" class="form-control">

                                                        <label for="perfil_id" class="form-label">Tipo de Cuenta</label>
                                                        <input type="integer" id="perfil_id" name="perfil_id" class="form-control">

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger text-white" data-bs-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-success text-white">Actualizar usuario</button>
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
        
        
    </div>
    
</body>
@endsection