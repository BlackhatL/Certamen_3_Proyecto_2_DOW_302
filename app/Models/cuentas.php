<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuentas extends Model
{
    use HasFactory;
    protected $table = 'cuentas';

    public function perfil(){
        return $this->belongsTo('App\Models\perfiles');
    }
    public function imagen(){
        return $this->hasMany('App\Models\imagenes');
    }


}
