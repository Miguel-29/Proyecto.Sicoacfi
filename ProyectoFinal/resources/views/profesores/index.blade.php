@extends('layouts.template')
@section('title')
    Profesores
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Lista de profesores</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <table class="table">
                        <caption>
                            <a type="button" href="{{route('profesores.create')}}" class="btn btn-success">Registrar profesor</a>
                            <caption>Lista de profesores</caption>
                        </caption>
                        <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Documento</th>
                            <th>Licenciatura</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($profesores as $profesor)
                            <tr>
                                <td>{{$profesor->nombre}}</td>
                                <td>{{$profesor->apellido}}</td>
                                <td>{{$profesor->licenciatura}}</td>
                                <td>{{$profesor->documento}}</td>
                                <td>
                                    <a href="{{route('profesores.edit',$profesor->id)}}">Lapiz</a>   
                                </td>
                                <td>X</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
