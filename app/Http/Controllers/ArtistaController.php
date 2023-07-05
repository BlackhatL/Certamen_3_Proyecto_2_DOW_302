<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imagenes;
use App\Models\cuentas;
use Illuminate\Support\Facades\Storage;

class ArtistaController extends Controller
{
    public function index(){
        $imagenes = imagenes::all();
        return view('artista.index',compact('imagenes'));
    }


    public function store(imagenes $imagenes, Request $request){

        $imagenes = new imagenes();
        $imagenes->cuenta_user = $request->cuenta_user;
        $imagenes->baneada = 0;
        $imagenes->motivo_ban = '';
        $imagenes->titulo = $request->titulo;
        if($request->hasFile('archivo')){
            $archivo = $request->file('archivo');
            $rutaArchivo = $archivo->store('/public/images');
            $imagenes->archivo = $rutaArchivo;
        }
        $imagenes->save();
        return redirect()->route('artista.index');
    }

    public function storeuser(cuentas $cuentas, Request $request){
        $cuentas = new cuentas();
        $cuentas->user = $request->user;
        $cuentas->password = $request->password;
        $cuentas->nombre = $request->nombre;
        $cuentas->apellido = $request->apellido;
        $cuentas->perfil_id = 1;
        $cuentas->save();
        return redirect()->route('home.index');
    }
}
