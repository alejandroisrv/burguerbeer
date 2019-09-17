<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model{

    public $table = 'productos';
    protected $fillables = ['nombre','categoria_id','img','icon','descripcion','ingredientes','precio','slug',];
    
    public function categoria(){
        return $this->belongsTo('App\Categoria','categoria_id');
    }

}
