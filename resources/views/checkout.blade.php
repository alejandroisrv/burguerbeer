@extends('layouts.base')

@section('title', 'Home')

@section('content')
<div class="content-categorias" id="app">
    <checkout :metodos="{{ $metodos }}" />
</div>
@endsection

@push('scripts')
 <script src="/assets/js/checkout.js"></script>  
@endpush