<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PerfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('perfiles')->insert([
            ['nombre'=>'Artista','created_at'=>Carbon::now()],
            ['nombre'=>'Administrador','created_at'=>Carbon::now()]
        ]);
    }
}
