@extends('layouts.template')
@section('title')
    Registrar aula
@endsection
@section('content')
    <div  class="container">
        <div  class="row">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Registrar aula</h4>                    
                </div>
                <form action="{{route('aulas.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="row offset-sm-3 col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name="code" id="code" placeholder="Codigo" autofocus >
                                <label for="code">Codigo</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-select" name="floor" id="floor" aria-label="seleccione piso">
                                    <option value="" selected>Seleccione el piso</option>
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
                            <span><i class="fas fa-folder-plus"></i>  Guardar</span>
                        </button>
                        <button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></button>
                        <a type="button" href="{{route('aulas.index')}}" class="btn btn-danger">X</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div style="display: none">
    @if ($errors->any())
        <div  class="alert alert-danger">
            <ul id="dsa">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
@endsection

