@extends('layouts.template')
@section('title')
    Activos fijos
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row mx-5">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Lista de activos fijos</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <table class="table">
                            <caption>Lista de activos fijos</caption>
                            <thead class="table-dark">
                            <tr>
                                <th>Marca <span><i type="button" class="fas fa-sort-down" onclick="$orden='desc' {{route('activos.index')}}" ></i></span></th>
                                <th>Color</th>
                                <th>Referencia</th>
                                <th>Serial</th>
                                <th>Categoria</th>
                                <th>Fecha de ingreso</td>
                                <th>Mantenimiento</th>
                                <th>Codigo aula</th>
                                <th>Responsable</th>
                                <th>Editar</th>
                                <th>Remover</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($activos as $activo)
                                <tr>
                                    <td>{{$activo->marca}}</td>
                                    <td>{{$activo->color}}</td>
                                    <td>{{$activo->referencia}}</td>
                                    <td>{{$activo->numeroSerial}}</td>
                                    <td>{{$activo->categoria}}</td>
                                    <td>{{$activo->fechaIngreso}}</td>
                                    <td>{{$activo->mantenimiento}}</td>
                                    @if ($activo->idAula == '')
                                        <td>Sin asignar</td>
                                    @else
                                    @foreach($ambientes as $ambiente)
                                        @if($ambiente->id == $activo->idAula)
                                            <td>
                                                {{$ambiente->codigo}}
                                            </td>
                                        @endif
                                    @endforeach
                                    @endif
                                    @if ($activo->idProfesor == '')
                                        <td>Sin asignar</td>
                                    @else
                                    @foreach($profesores as $profesor)
                                        @if($profesor->id == $activo->idProfesor)
                                            <td>
                                                {{$profesor->nombre}} {{$profesor->apellido}}
                                            </td>
                                        @endif
                                    @endforeach
                                    @endif
                                    <td>
                                        <a href="{{route('activos.edit',$activo->id)}}">Lapiz</a>
                                    </td>
                                    <td>
                                        <a href="#">X</a>
                                    </td>
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

