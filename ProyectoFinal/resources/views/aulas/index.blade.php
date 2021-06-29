@extends('layouts.template')
@section('title')
    Activos fijos
@endsection
@section('content')
    <div class="container">
        <div class="row offset-lg-3 col-lg-6">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Lista de aulas</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <table class="table">
                            <caption>
                                <a type="buttom" href="{{route('aulas.create')}}" class="btn btn-success">Registrar aula</a>
                                <caption>Lista de aulas</caption>
                            </caption>
                        <thead class="table-dark">
                        <tr>
                            <th>Codigo</th>
                            <th>Piso</th>
                            <th>Editar</th>
                            <th>Remover</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($environment as $environments)
                            <tr>
                                <td>{{$environments->code}}</td>
                                <td>{{$environments->floor}}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{route('aulas.edit',$environments->id)}}">
                                        <i class="fas fa-edit"></i>
                                    </a>  
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal{{$environments->id}}">                                            
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
                    <div class="d-flex justify-content-center">
                        {{$environment->links('pagination::bootstrap-4')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
