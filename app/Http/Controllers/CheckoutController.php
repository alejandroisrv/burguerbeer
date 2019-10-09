<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\MetodoPago;

class CheckoutController extends Controller {
    
    public function CheckoutView(Request $request){
        $metodos = MetodoPago::all();
        return view("checkout",['metodos' => $metodos]);
    }

    public function FinishView(Request $request){
        $data = $request->all();
        if(Auth::check()){
            abort(404);
        }
        return view("finish");
    }
    

}
