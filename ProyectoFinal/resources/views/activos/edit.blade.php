@extends('layouts.template')
@section('title')
    Editar activos fijos
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Registrar activos fijos</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{route('activos.update',$activos->id)}}" method="post" class="offset-lg-3 col-lg-6">
                            @csrf
                            @method('PUT')
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="{{$activos->marca}}" id="marca" name="marca" placeholder="Marca" autofocus required>
                                <label for="marca">Marca</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" value="{{$activos->numeroSerial}}" id="numeroSerial" name="numeroSerial" placeholder="serial" required>
                                <label for="serial">Numero de serial</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" value="{{$activos->referencia}}" id="referencia" name="referencia" placeholder="referencia" required>
                                <label for="referencia">Referencia</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" value="{{$activos->fechaIngreso}}" id="fechaIngreso" name="fechaIngreso" placeholder="fechaIngreso" required>
                                <label for="fechaIngreso">Fecha de ingreso</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" value="{{$activos->mantenimiento}}" id="mantenimiento" name="mantenimiento" placeholder="mantenimiento">
                                <label for="mantenimiento">Fecha de mantenimiento</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="{{$activos->color}}" id="color" name="color" placeholder="color">
                                <label for="color">Color</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="categoria" name="categoria" aria-label="Floating label select example" required>
                                    <option selected>{{$activos->categoria}}</option>
                                    <option value="Tecnologia">Tecnologia</option>
                                    <option value="Muebles">Muebles</option>
                                </select>
                                <label for="floatingSelect">Seleccione categoria</label>
                            </div>
                            <div class="form-floating mb-3 ">
                                <select name="idAula" id="idAula" class="form-select"aria-label="seleccionar aula">
                                    <option selected value="">
                                        @if($activos->idAula == '')
                                            Sin asignar aula
                                        @else

                                        @endif
                                    </option>
                                    @foreach($ambientes as $ambiente)
                                        <option value="{{$ambiente->id}}">
                                            Cod: {{$ambiente->codigo}}, {{$ambiente->piso}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Seleccione aula</label>
                            </div>
                            <div class="form-floating ">
                                <select name="idProfesor" id="idProfesor" class="form-select" aria-label="seleccionar profesor">
                                    <option selected value="">
                                        @if($activos->idProfesor == '')
                                            Sin asignar profesor
                                        @else

                                        @endif
                                    </option>
                                    @foreach($profesores as $profesor)
                                        <option value="{{$profesor->id}}">
                                            {{$profesor->nombre}} {{$profesor->apellido}}, de {{$profesor->licenciatura}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Seleccione profesor</label>
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">
                        <span><i class="fas fa-folder-plus"></i> Actualizar</span>
                    </button>
                    <button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></button>
                    <a type="button" class="btn btn-danger" href="{{route('activos.index')}}">Cancelar</a>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
