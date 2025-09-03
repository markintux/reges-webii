@extends('app.layouts.template')

@section('title', 'Visualizar Categorias')

@section('content')
    @component('app.components.table-category-index', ['categories' => $categories])
    @endcomponent
@endsection
