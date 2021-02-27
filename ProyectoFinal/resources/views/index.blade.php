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
            <a href="{{route('profesores.index')}}">gestionar profesores</a>,
            <a href="{{route('aulas.index')}}">gestionar aulas </a>, o mejor quieres
            <a href="{{route('categorias.index')}}">ver categorias</a>.
        </div>
        {{--<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>

            <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

            <h2>Section title</h2>
        </main>--}}
    </div>
</div>
@endsection
