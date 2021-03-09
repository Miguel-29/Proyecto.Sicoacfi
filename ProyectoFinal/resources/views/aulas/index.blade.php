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
                                    <a href="{{route('aulas.edit',$environments->id)}}">Lapiz</a>
                                </td>
                                <td>X</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="offset-4 offset-sm-5">
                        <div class="offset-sm-1">
                            {{$environment->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
