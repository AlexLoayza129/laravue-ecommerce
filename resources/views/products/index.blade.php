@extends('layout.template')

@section('title', 'Producto | Inicio')

@section('content')
<div id="products-index">
    <products-component :products="{{ $products }}"></products-component>
</div>
@endsection