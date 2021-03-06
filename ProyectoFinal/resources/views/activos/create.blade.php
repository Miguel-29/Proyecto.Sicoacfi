@extends('layouts.template')
@section('title')
    Registrar activos fijos
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
                        <form action="{{route('activos.store')}}" method="post" class="offset-lg-3 col-lg-6">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" autofocus required>
                                <label for="marca">Marca</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="numeroSerial" name="numeroSerial" placeholder="serial" required>
                                <label for="serial">Numero de serial</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="referencia" name="referencia" placeholder="referencia" required>
                                <label for="referencia">Referencia</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="fechaIngreso" required>
                                <label for="fechaIngreso">Fecha de ingreso</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="mantenimiento" name="mantenimiento" placeholder="mantenimiento">
                                <label for="mantenimiento">Fecha de mantenimiento</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="color" name="color" placeholder="color">
                                <label for="color">Color</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="categoria" name="categoria" aria-label="Floating label select example" required>
                                    <option selected>Categorias</option>
                                    <option value="Tecnologia">Tecnologia</option>
                                    <option value="Muebles">Muebles</option>
                                </select>
                                <label for="floatingSelect">Seleccionar categoria</label>
                            </div>
                            <div class="form-floating mb-3 ">
                                <select name="idAula" id="idAula" class="form-select"aria-label="seleccionar aula">
                                    <option selected value="">Sin asignar aula</option>
                                    @foreach($teacher as $teachers)
                                        <option value="{{$teachers->id}}">
                                            {{$teachers->id}} {{$teachers->piso}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Seleccione aula</label>
                            </div>
                            <div class="form-floating ">
                                <select name="idProfesor" id="idProfesor" class="form-select" aria-label="seleccionar profesor">
                                    <option selected value="">Sin asignar profesor</option>
                                    @foreach($environment as $environments)
                                        <option value="{{$environments->id}}">
                                            {{$environments->nombre}} {{$environments->apellido}} {{$environments->licenciatura}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Seleccione profesor</label>
                            </div>
                            <button type="submit" class="btn btn-success">
                                <span><i class="fas fa-folder-plus"></i>  Guardar</span>
                            </button>
                            <button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
@endsection
