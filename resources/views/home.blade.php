@extends('layouts.base')

@section('title', 'Home')

@section('content')

<div class="row align-items-center home-content">
    <div class="col-lg-6 ml-auto">
        <a href="/" class="btn btn-primary">  Inicio </a>
        <a href="/carta" class="btn btn-info">  Ver carta </a>
    </div>
    <div class="modal-burguer-backdrop">
        <div class="modal-burguer text-center">
            <img src="/assets/img/burguerbeer.png" class="img-fluid pt-3"  style="width:145px;height:145px;" />
            <div class="text-center">
                <h2 class="my-4"> Estamos renovando nuestra web</h2>
                <h4 class="my-4"> 
                    Haz tu pedido ahora al: 
                    <br>
                    <a href="tel:923985662" class="numero"> 923 985 662</a>
                    -
                    <a href="tel:912889571" class="numero"> 912 889 571</a>
                </h5>
                <br>
            </div>
        </div>
    </div>
</div>
    
@endsection
