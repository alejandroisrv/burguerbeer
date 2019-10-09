<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    protected $table="metodos_pagos";
    protected $fillable=['nombre','icono'];

    

}
