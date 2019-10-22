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
            <img src="/assets/img/burguerbeer.png" class="img-fluid pt-3"  style="width:140px;height:140px;" />
            <div class="text-center">
                <h2 class="mt-4"> Estamos renovando nuestra web</h2>
                <h4 class="mt-4"> Abrimos de Lunes a Viernes <br> hasta las <span class="numero"> 3 </span> am</h4>
                <h5 class="mt-5"> 
                    Para pedidos al: <br>
                    <a href="tel:923985665" class="numero"> 923 985 665</a> 
                    -
                    <a href="tel:912889571" class="numero"> 912 889 571</a>
                </h5>
            </div>
        </div>
    </div>
</div>
    
@endsection
