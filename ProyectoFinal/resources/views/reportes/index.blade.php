@extends('layouts.template')
@section('title')
    Generar reportes
@endsection
@section('content')
    <div class="row ">
        <div class="card offset-lg-2 col-lg-8 my-3 text-center">
            <ul class="nav nav-tabs nav-justified fs-5">
                <li class="nav-item ">
                    <a class="nav-link active" data-bs-toggle="tab" id="asset-tab" data-bs-target="#asset" type="button" role="tab" aria-controls="asset">Reporte de activos fijos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"data-bs-toggle="tab" id="down-tab" data-bs-target="#down" type="button" role="tab" aria-controls="down">Reporte de activos fijos de baja</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <form class="form-inline tab-pane fade show active" role="tabpanel" aria-labelledby="asset-tab" id="asset" action="{{route('reportes.descarga')}} " method="get">
                    <div class="card-header">
                        <h5>Generar reporte de activos fijos</h5>
                    </div>
                    <div class="card-body py-3">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="Fecha" name="Fecha" placeholder="Fecha inicial" required>
                            <label for="Fecha">Fecha inicial</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="Fechados" name="Fechados" placeholder="Fecha final" required>
                            <label for="Fechados">Fecha final</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Generar reporte</button>
                    </div>
                </form>
                <form class="form-inline tab-pane fade" id="down" role="tabpanel" aria-labelledby="down-tab" action="{{route('reportesbajas.descarga')}}" method="get">
                    <div class="card-header">
                        <h5>Generar reporte de activos fijos de baja</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="Fecha" name="Fecha" placeholder="fechaIngreso" required>
                            <label for="Fecha">Fecha inicial</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="Fechados" name="Fechados" placeholder="fechaIngreso2" required>
                            <label for="Fechados">Fecha final</label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Generar reporte</button>
                    </div>
                </form> 
            </div>    
        </div>
    </div>
@endsection