@extends('layouts.template')
@section('title')
    Generar reportes
@endsection
@section('content')
    <div class="row text-center offset-sm-2">
        <div class="card col-sm-4 mx-sm-3 my-3">
            <div class="card-header">
                <h5>Generar reporte de activos fijos</h5>
            </div>
            <div class="card-body py-3">
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="inicioActivo" name="inicioActivo" placeholder="fechaIngreso" required>
                    <label for="fechaIngreso">Fecha inicial</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="fechaIngreso" required>
                    <label for="fechaIngreso">Fecha final</label>
                </div>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-primary">Generar reporte</a>
            </div>    
        </div>
        <div class="card col-sm-4 my-3">
            <form action="">
                <div class="card-header">
                    <h5>Generar reporte de activos fijos de baja</h5>
                </div>
                <div class="card-body">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="fechaIngreso" required>
                        <label for="fechaIngreso">Fecha inicial</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="fechaIngreso" required>
                        <label for="fechaIngreso">Fecha final</label>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" type="submit" class="btn btn-primary">Generar reporte</a>
                </div>
            </form>  
        </div>
    </div>
@endsection