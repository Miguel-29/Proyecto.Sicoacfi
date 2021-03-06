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
                            <th>Licenciatura</th>
                            <th>Documento</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($teacher as $teachers)
                            <tr>
                                <td>{{$teachers->nombre}}</td>
                                <td>{{$teachers->apellido}}</td>
                                <td>{{$teachers->licenciatura}}</td>
                                <td>{{$teachers->documento}}</td>
                                <td>
                                    <a href="{{route('profesores.edit',$teachers->id)}}">Lapiz</a>   
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
