@extends('layouts.base')

@section('title', 'Home')

@section('content')
<div class="content-categorias" id="app">
    <producto :producto="{{ $producto }}" :salsas="{{ $salsas }}" :adicionales="{{ $adicionales }}" :bebidas="{{ $bebidas }}"></producto>
</div>
@endsection

@push('scripts')
 <script src="/assets/js/producto.js"></script>  
@endpush