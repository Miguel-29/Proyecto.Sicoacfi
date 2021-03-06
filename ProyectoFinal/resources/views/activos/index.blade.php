@extends('layouts.template')
@section('title')
    Activos fijos
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    <input type="search" class="form-control form-control-ligth w-100" type="text" placeholder="Search" id="busqueda" aria-label="search">
                    <button class="btn btn-dark" id="butonBuscar" onmouseover="mostrar()" >Buscar</button>
                </div>
                <div class="card-header">
                    <h4>Lista de activos fijos</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <table class="table">
                            <caption>Lista de activos fijos</caption>
                            <thead class="table-dark">
                            <tr>
                                <th>
                                    Marca
                                    <a type="button" class="fas fa-sort-up" href="{{route('activos.index')}}" style="color: white; text-decoration: none" ></a>
                                    <a type="button" class="fas fa-sort-down" href="{{route('activos.index',['OrderBy'=>'desc'])}}" style="color: white; text-decoration: none"></a>
                                </th>
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
                                    <td>{{$assets->trademark}}</td>
                                    <td>{{$assets->color}}</td>
                                    <td>{{$assets->reference}}</td>
                                    <td>{{$assets->serial_number}}</td>
                                    <td>{{$assets->category}}</td>
                                    <td>{{$assets->date_admission}}</td>
                                    <td>{{$assets->maintenance}}</td>
                                    @if ($assets->idenvironment == '')
                                        <td>Sin asignar</td>
                                    @else
                                    @foreach($environment as $environments)
                                        @if($environments->id == $assets->idenvironment)
                                            <td>
                                                {{$environments->code}}
                                            </td>
                                        @endif
                                    @endforeach
                                    @endif
                                    @if ($assets->idteacher == '')
                                        <td>Sin asignar</td>
                                    @else
                                    @foreach($teacher as $teachers)
                                        @if($teachers->id == $assets->idteacher)
                                            <td>
                                                {{$teachers->name}} {{$teachers->lastnames}}
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

