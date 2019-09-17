<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adicional extends Model
{
    
    public $table = 'adicionales';
    public $timestamps = false;

    protected $fillables = ['nombre','img','icon','descripcion','categoria_id','precio'];


}
