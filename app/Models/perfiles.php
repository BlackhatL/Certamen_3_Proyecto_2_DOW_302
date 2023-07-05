<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perfiles extends Model
{
    use HasFactory;
    protected $table = 'perfiles';

    public function cuenta(){
        return $this->hasMany('App\Models\cuentas');
    }
}
