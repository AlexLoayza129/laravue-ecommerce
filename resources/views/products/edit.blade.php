@extends('layout.template')

@section('title', 'Productos | Editar')

@section('content')
<div id="edit-product">
    <edit-product :product="{{ $product }}"></edit-product>
</div>
@endsection