@extends('layouts.template')
@section('title')
    Registrar profesor
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card text-center">
                    <div class="card-header">
                        <h3>Registrar profesor</h3>
                    </div>
                <form action="{{route('profesores.update',$teacher->id)}}" method="post">
                @csrf
                @method("PUT")
                    <div class="card-body">
                        <div class="row offset-sm-3 col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="nombre" value="{{$teacher->nombre}}" autofocus required>
                                <label for="nombre">nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" value="{{$teacher->apellido}}" required>
                                <label for="apellido">apellido</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name='licenciatura' id="licenciatura" placeholder="Licenciatura" value="{{$teacher->licenciatura}}" required>
                                <label for="licenciatura">licenciatura</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name='documento' id="documento" placeholder="Documento" value="{{$teacher->documento}}" required>
                                <label for="documento">documento</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">
                            <span><i class="fas fa-folder-plus"></i> Actualizar</span>
                        </button>
                        <button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></button>
                        <a type="button" class="btn btn-danger" href="{{route('profesores.index')}}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
