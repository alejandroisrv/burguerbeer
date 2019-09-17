@extends('layouts.base')

@section('title', $categoria)

@section('content')
<div class="content-categorias">
    <div class="row">
        @foreach ($productos as $item)
            <div class="item-producto col-sm-6 col-lg-3">
                <a href="/carta/{{$item->categoria->slug}}/{{$item->slug}}/{{$item->id}}">
                    <img src="/assets/img/productos/{{ $item->img }}">
                    <p>{{ $item->nombre }} </p>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
