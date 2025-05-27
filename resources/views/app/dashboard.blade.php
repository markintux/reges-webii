@extends('app.layouts.template')

@section('title', 'Dashboard')

@section('content')
    @component('app.components.dashboard', ['reminders' => $reminders, 'searchDate' => $searchDate])
    @endcomponent
@endsection
