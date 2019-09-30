<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use App\Salsa;
use App\Adicional;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    public function CartaView(){

        $categorias = Categoria::all();
        return view('carta',[
            'categorias'=> $categorias
        ]);

    }


    public function CategoryView(Request $request,$categoria){

        $productos = Producto::with(['categoria'])->whereHas('categoria',function($q)use($categoria){
                $q->where('slug',$categoria);
        })->get();

        if(count($productos) == 0){
            abort(404);
        }
        $categoria ='';
        $productos->map(function($item) use(&$categoria){
            $item['slug'] = str_slug($item->nombre, '-');
            $categoria = $item->categoria->nombre;
        });

        return view('carta-details',[
            'productos'=> $productos,
            'categoria' => $categoria
        ]);

    }

    public function ProductoView(Request $request,$cat_slug,$product_slug,$product_id){

        $producto = Producto::find($product_id);
        $producto->load('categoria');
        $adicionales = Adicional::all();
        $salsas = Salsa::orderBy('nombre','ASC')->get();
        $bebidas = Producto::where('categoria_id',5)->get();

        if(!$producto){
            abort(404);
        }
        return view('producto-details',[
            'producto' => $producto,
            'adicionales'=> $adicionales,
            'salsas' => $salsas,
            'bebidas' => $bebidas
        ]);

    }
}
