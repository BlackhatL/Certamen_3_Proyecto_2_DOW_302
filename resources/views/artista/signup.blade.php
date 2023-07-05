@extends('layouts.master')

@section('contenido-principal')



<div class="card">
    <div class="card-header bg-dark text-white">Formulario de Registro</div>
    <div class="card-body">
        <form method="POST" action="{{route('artistas.storeuser')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" id="apellido" name="apellido" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>
        </form>
    </div>
</div>


@endsection