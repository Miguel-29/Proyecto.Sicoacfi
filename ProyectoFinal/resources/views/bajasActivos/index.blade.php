@extends('layouts.template')
@section('title')
    'Activos fijos dados de baja'
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Lista de activos fijos dados de baja</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <table class="table">
                        <caption>Activos fijos dados de baja</caption>
                        <thead class="table-dark">
                        <tr>
                            <th>Marca</th>
                            <th>Color</th>
                            <th>Referencia</th>
                            <th>Serial</th>
                            <th>Categoria</th>
                            <th>Fecha de ingreso</td>
                            <th>Mantenimiento</th>
                            <th>Restaurar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($asset as $activo)
                            <tr>                            
                                <td>{{$activo->trademark}}</td>
                                <td>{{$activo->color}}</td>
                                <td>{{$activo->reference}}</td>
                                <td>{{$activo->serial_number}}</td>
                                <td>{{$activo->category}}</td>
                                <td>{{$activo->date_admission}}</td>
                                <td>{{$activo->maintenance}}</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="offset-4 offset-sm-5">
                        <div class="offset-sm-1">
                            {{$asset->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

