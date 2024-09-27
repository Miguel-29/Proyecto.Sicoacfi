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
                                <td>{{$teachers->name}}</td>
                                <td>{{$teachers->lastnames}}</td>
                                <td>{{$teachers->degree}}</td>
                                <td>{{$teachers->document}}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{route('profesores.edit',$teachers->id)}}">
                                        <i class="fas fa-edit"></i>
                                    </a>   
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$teachers->id}}">                                            
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                    @include('component.modal')
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="offset-4 offset-sm-5">
                        <div class="offset-sm-1">
                            {{$teacher->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
