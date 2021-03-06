@extends('layouts.template')
@section('title')
    Editar aula
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Editar aula</h4>
                </div>
                <form action="{{route('aulas.update',$environment->id)}}" method="post">
                    @csrf
                    @method("PUT")
                    <div class="card-body">
                        <div class="row offset-sm-3 col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="codigo" id="codigo" placeholder="{{$environment->codigo}}" value="{{$environment->codigo}}" autofocus required>
                                <label for="codigo">Codigo: {{$environment->codigo}}</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-select" name="piso" id="piso" aria-label="seleccione piso" required>
                                    <option selected>{{$environment->piso}}</option>
                                    <option value="piso 1">Piso 1</option>
                                    <option value="piso 2">Piso 2</option>
                                    <option value="piso 3">Piso 3</option>
                                    <option value="piso 4">Piso 4</option>
                                    <option value="piso 5">Piso 5</option>
                                    <option value="piso 6">Piso 6</option>
                                </select>
                                <label for="floatingSelect">Seleccione el piso</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">
                            <span><i class="fas fa-folder-plus"></i> Actualizar</span>
                        </button>
                        <button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></button>
                        <a type="button" class="btn btn-danger" href="{{route('aulas.index')}}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
