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
                <form action="{{route('profesores.store')}}" method="post" onsubmit="return qqqqq()">
                @csrf
                    <div class="card-body">
                        <div class="row offset-sm-3 col-sm-6">
                            <div class="form-floating mb-3">
                                <input value="{{ old('name')}}" type="text" class="form-control @error('name') empty @enderror" name="name" id="name" placeholder="Nombre" onchange="sumar()" required>
                                <label for="name">nombre</label>
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ old('lastnames')}}" type="text" class="form-control @error('lastnames') empty @enderror" name="lastnames" id="lastnames" placeholder="Apellidos" onchange="sumar()" required>
                                <label for="lastnames">apellido</label>
                                @error('lastnames')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ old('degree')}}" type="text" class="form-control @error('degree') empty @enderror" name='degree' id="degree" placeholder="Licenciatura" onchange="sumar()" required>
                                <label for="degree">licenciatura</label>
                                @error('degree')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ old('document')}}" type="number" class="form-control @error('document') empty @enderror" name='document' id="document" placeholder="Documento" onchange="sumar()" required>
                                <label for="document">documento</label>
                                @error('document')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" id="envio" class="btn btn-success" disabled>Guardar</button>
                        <button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></button>
                        <a type="button" href="{{route('profesores.index')}}" class="btn btn-danger">X</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        qqqqq = () => {
            return true;
        }
    </script>
@endsection
