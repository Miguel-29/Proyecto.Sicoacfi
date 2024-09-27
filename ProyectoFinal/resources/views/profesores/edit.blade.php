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
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" value="{{$teacher->name}}" autofocus required>
                                <label for="name">nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="lastnames" id="lastnames" placeholder="Apellido" value="{{$teacher->lastnames}}" required>
                                <label for="lastnames">apellido</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name='degree' id="degree" placeholder="Licenciatura" value="{{$teacher->degree}}" required>
                                <label for="degree">licenciatura</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name='document' id="document" placeholder="Documento" value="{{$teacher->document}}" required>
                                <label for="document">documento</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success" id="envio" disabled>
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
