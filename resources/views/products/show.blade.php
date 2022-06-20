@extends('layout.template')

@section('title', 'Producto | Info')

@section('content')
<div id="product-info">
    <product-info :product="{{$product}}"></product-info>
</div>
@endsection