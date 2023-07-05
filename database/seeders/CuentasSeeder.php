<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CuentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('cuentas')->insert([
            ['user'=>'Lauta','password'=>'1234','nombre'=>'Lautaro','apellido'=>'Piderit','perfil_id'=>1,'created_at'=>Carbon::now()],
            ['user'=>'Saavedrag','password'=>'1234','nombre'=>'Hernan','apellido'=>'Saavedra','perfil_id'=>1,'created_at'=>Carbon::now()],
            ['user'=>'Admin1','password'=>'1234','nombre'=>'Administrador','apellido'=>'','perfil_id'=>2,'created_at'=>Carbon::now()]
        ]);
    }
}
