@extends('app.layouts.template')

@section('title', 'Editar Lembrete')

@section('content')
    @component('app.components.form-reminder-edit', ['reminder' => $reminder])
    @endcomponent
@endsection
