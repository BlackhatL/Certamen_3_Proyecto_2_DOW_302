<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\imagenes;
use App\Models\cuentas;


class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function edit(cuentas $cuentas){
        $cuentas = cuentas::all();
        return view('admin.users', compact('cuentas'));
    }

    public function update(cuentas $cuentas, Request $request){
        $cuentas->user = $request->user;
        $cuentas->password = $request->password;
        $cuentas->nombre = $request->nombre;
        $cuentas->apellido = $request->apellido;
        $cuentas->perfil_id = $request->perfil;
        
        $cuentas->save();
        return redirect()->route('admin.index');
    }


    public function showuser(cuentas $cuentas){
        $cuentas = cuentas::all();
        return view('admin.users',compact('cuentas'));
    }

    public function show(imagenes $imagenes){
        $imagenes = imagenes::all();
        return view('admin.images',compact('imagenes'));
    }

    public function destroy(cuentas $cuentas){
        $cuentas->delete();
        return redirect()->route('admin.index');
    }
}
