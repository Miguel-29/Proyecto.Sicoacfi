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
                                <input type="text" class="form-control" id="trademark" name="trademark" placeholder="Marca" autofocus required>
                                <label for="trademark">Marca</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="serial_number" name="serial_number" placeholder="serial" required>
                                <label for="serial_number">Numero de serial</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="reference" name="reference" placeholder="referencia" required>
                                <label for="reference">Referencia</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="date_admission" name="date_admission" placeholder="Fecha de ingreso" required>
                                <label for="date_admission">Fecha de ingreso</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="maintenance" name="maintenance" placeholder="mantenimiento">
                                <label for="maintenance">Fecha de mantenimiento</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="color" name="color" placeholder="color">
                                <label for="color">Color</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="category" name="category" aria-label="Floating label select" required>
                                    <option selected>Categorias</option>
                                    <option value="tecnologia">Tecnologia</option>
                                    <option value="muebles">Muebles</option>
                                </select>
                                <label for="floatingSelect">Seleccionar categoria</label>
                            </div>
                            <div class="form-floating mb-3 ">
                                <select name="idenvironment" id="idenvironment" class="form-select"aria-label="seleccionar aula">
                                    <option selected value="">Sin asignar aula</option>
                                    @foreach($environment as $environments)
                                        <option value="{{$environments->id}}">
                                            {{$environments->id}} {{$environments->floor}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Seleccione aula</label>
                            </div>
                            <div class="form-floating ">
                                <select name="idteacher" id="idteacher" class="form-select" aria-label="seleccionar profesor">
                                    <option selected value="">Sin asignar profesor</option>
                                    @foreach($teacher as $teachers)
                                        <option value="{{$teachers->id}}">
                                            {{$teachers->name}} {{$teachers->lastnames}} {{$teachers->degree}}
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
