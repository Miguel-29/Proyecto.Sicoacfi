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
                            <th>Editar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($activos as $activo)
                            <tr>                            
                                <td>{{$activo->marca}}</td>
                                <td>{{$activo->color}}</td>
                                <td>{{$activo->referencia}}</td>
                                <td>{{$activo->numeroSerial}}</td>
                                <td>{{$activo->categoria}}</td>
                                <td>{{$activo->fechaIngreso}}</td>
                                <td>{{$activo->mantenimiento}}</td>
                                <td>Lapiz</td> 
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

