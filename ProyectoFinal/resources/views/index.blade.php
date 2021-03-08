@extends('layouts.template')
@section('title')
    ¡Bienvenido a SICOACFI!
@endsection
@section('content')
<div class="container-fluid text-center">
    <div class="row">
        <br>
        <h1>¡Bienvenido a SICOACFI!</h1>
        <h4 class="my-5">¿Que quieres hacer hoy?</h4>
        <div class="h5 pt-lg-5">
            <a href="{{route('activos.index')}}">Ver activos fijos</a>,
            <a href="{{route('profesores.index')}}">gestionar profesores</a>, o mejor quieres
            <a href="{{route('aulas.index')}}">gestionar aulas </a>
        </div>
    </div>
</div>
@endsection
