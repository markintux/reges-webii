@extends('app.layouts.template')

@section('title', 'Detalhes do Lembrete')

@section('content')
    @component('app.components.form-reminder-show', ['reminder' => $reminder])
    @endcomponent
@endsection
