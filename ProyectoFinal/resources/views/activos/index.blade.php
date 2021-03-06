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
                            @foreach($asset as $assets)
                                <tr>
                                    <td>{{$assets->marca}}</td>
                                    <td>{{$assets->color}}</td>
                                    <td>{{$assets->referencia}}</td>
                                    <td>{{$assets->numeroSerial}}</td>
                                    <td>{{$assets->categoria}}</td>
                                    <td>{{$assets->fechaIngreso}}</td>
                                    <td>{{$assets->mantenimiento}}</td>
                                    @if ($assets->idAula == '')
                                        <td>Sin asignar</td>
                                    @else
                                    @foreach($environment as $environments)
                                        @if($environments->id == $assets->idAula)
                                            <td>
                                                {{$environments->codigo}}
                                            </td>
                                        @endif
                                    @endforeach
                                    @endif
                                    @if ($assets->idProfesor == '')
                                        <td>Sin asignar</td>
                                    @else
                                    @foreach($teacher as $teachers)
                                        @if($teachers->id == $assets->idProfesor)
                                            <td>
                                                {{$teachers->nombre}} {{$teachers->apellido}}
                                            </td>
                                        @endif
                                    @endforeach
                                    @endif
                                    <td>
                                        <a href="{{route('activos.edit',$assets->id)}}">Lapiz</a>
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

