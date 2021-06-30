@extends('layouts.template')
@section('title')
    Procesando solicitud
@endsection
@section('content')
    <form @if($tipo == "environment")name="formDeleteEnvironment" action="{{route('aulas.delete',$id)}}"@elseif($tipo == "asset")name="formDeleteAsset" action="{{route('profesores.delete',$id)}}"@endif method="post">
        @csrf
        @method('DELETE')
    </form>
    <h3>Estamos procesando tu solicitud</h3>
@endsection