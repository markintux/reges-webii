@extends('app.layouts.template')

@section('title', 'Cadastrar Lembrete')

@section('content')
    @component('app.components.form-reminder-create')
    @endcomponent
@endsection
