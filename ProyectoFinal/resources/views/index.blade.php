@extends('layouts.template')
@section('title')
    ¡Bienvenido a SICOACFI!
@endsection
@section('content')
<div class="container-fluid text-center">
    <div class="row">
        <br>
        <div style="max-height: 50px; overflow: hidden;">
            <h1 id="aaa" class="titulo">¡Bienvenido a <b >SICOACFI</b>!</h1>

        </div>
        <h4 class="my-5">¿Que quieres hacer hoy?</h4>
        <div class="h5 pt-lg-5 ">
            <p class="enlaces">
                <a class="toosltip enlaces" href="{{route('activos.index')}}">Ver activos fijos <span class="tooltiptext">Excelente opción</span></a>  ,
                <a class="toosltip enlaces" href="{{route('profesores.index')}}">gestionar profesores <span class="tooltiptext">Vamos</span></a>, o prefieres
                <a class="toosltip enlaces" href="{{route('aulas.index')}}">gestionar las aulas <span class="tooltiptext">Las aulas</span></a>
            </p>
        </div>
    </div>
</div>
@endsection
<style>
    .titulo{
        animation-name: posicionarH1;
        animation-duration: 4s;
        /* transform: translateY(0px); */
    }
    @keyframes posicionarH1 {
        0%   {transform: translateY(-50px)}
        25%  {transform: translateY(25px)}
        50%  {transform: translateY(-25px)}
        100% {transform: translateY(0)}
    }
    .enlaces{
        animation-name: aparecer;
        animation-duration: 3s;
        /* transform: translateY(0px); */
    }
    @keyframes aparecer {
        0%   {color: rgba(58, 58, 58, 0.0)}
        20%  {color: rgba(58, 58, 58, 0.2)}
        40%  {color: rgba(58, 58, 58, 0.4)}
        60%  {color: rgba(58, 58, 58, 0.6)}
        80%  {color: rgba(58, 58, 58, 0.8)}
    }
    .toosltip {
    position: relative;
    display: inline-block;
    }

    .toosltip .tooltiptext {
    visibility: hidden;
    min-width: 160px;
    background-color: rgba(58, 58, 58, 0.5);
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    bottom: -40px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1;
    }

    .toosltip:hover .tooltiptext {
    visibility: visible;
    }
</style>
