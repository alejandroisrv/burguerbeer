@extends('layouts.base')

@section('title', 'Home')

@section('content')

<div class="header-content">
    <div class="row">
        <div class="col-lg-12 py-4">
            <div class="encabezado-border">
                <h2>Carta</h2>
            </div>
        </div>
    </div>
</div>
<div class="content-categorias">
    <div class="row">
        @foreach ($categorias as $item)
            <div class="item-categoria col-sm-6 col-lg-3">
                <a href="/carta/{{$item->slug}}">
                    <img src="/assets/img/icons/{{ $item->img }}">
                    <div class="encabezado-border-min">
                        <p>{{ $item->nombre }} </p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
