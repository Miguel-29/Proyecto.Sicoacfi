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
                <form action="{{route('profesores.store')}}" method="post">
                @csrf
                    <div class="card-body">
                        <div class="row offset-sm-3 col-sm-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Marca" required>
                                <label for="nombre">nombre</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required>
                                <label for="apellido">apellido</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name='licenciatura' id="licenciatura" placeholder="Licenciatura" required>
                                <label for="licenciatura">licenciatura</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" name='documento' id="documento" placeholder="Documento" required>
                                <label for="documento">documento</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></button>
                        <a type="button" href="{{route('profesores.index')}}" class="btn btn-danger">X</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
