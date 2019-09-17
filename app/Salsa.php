<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salsa extends Model
{
    
    public $table = 'salsas';
    public $timestamps = false;

    protected $fillables = ['nombre','icon','categoria_id','estado'];


}
