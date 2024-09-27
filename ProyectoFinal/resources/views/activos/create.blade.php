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
                        <form action="{{route('activos.store')}}" method="post" class="offset-lg-3 col-lg-6" onformchange="consolse()">
                            @csrf
                            <div class="form-floating mb-3">
                                <input value="{{ old('trademark')}}" type="text" class="form-control @error('trademark') empty @enderror" id="trademark" name="trademark" placeholder="Marca" autofocus onchange="sumar()" required>
                                <label for="trademark">Marca</label>
                                @error('trademark')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ old('serial_number')}}" type="number" class="form-control @error('serial_number') empty @enderror" id="serial_number" name="serial_number" placeholder="serial" onchange="sumar()" required>
                                <label for="serial_number">Numero de serial</label>
                                @error('serial_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ old('reference')}}" type="text" class="form-control @error('reference') empty @enderror" id="reference" name="reference" placeholder="referencia" onchange="sumar()" required>
                                <label for="reference">Referencia</label>
                                @error('reference')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ old('date_admission')}}" type="date" class="form-control @error('date_admission') empty @enderror" id="date_admission" name="date_admission" placeholder="Fecha de ingreso" onchange="sumar()">
                                <label for="date_admission">Fecha de ingreso</label>
                                @error('date_admission')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ old('maintenance')}}" type="date" class="form-control @error('maintenance') empty @enderror" id="maintenance" name="maintenance" placeholder="mantenimiento">
                                <label for="maintenance">Fecha de mantenimiento</label>
                                @error('maintenance')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input value="{{ old('color')}}" type="text" class="form-control @error('color') empty @enderror" id="color" name="color" placeholder="color" required>
                                <label for="color">Color</label>
                                @error('color')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select @error('category') empty @enderror" id="category" name="category" aria-label="Floating label select" onchange="sumar()" required>
                                    <option selected value="">Categorias</option>
                                    <option value="tecnologia">Tecnologia</option>
                                    <option value="muebles">Muebles</option>
                                </select>
                                <label for="floatingSelect">Seleccionar categoria</label>
                                @error('category')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 ">
                                <select name="idenvironment" id="idenvironment" class="form-select @error('idenvironment') empty @enderror" aria-label="seleccionar aula" onchange="sumar()">
                                    <option selected value="">Sin asignar aula</option>
                                    @foreach($environment as $environments)
                                        <option value="{{$environments->id}}">
                                            Codigo: {{$environments->code}} {{$environments->floor}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Seleccione aula</label>
                            </div>
                            <div class="form-floating ">
                                <select name="idteacher @error('idteacher') empty @enderror" id="idteacher" class="form-select" aria-label="seleccionar profesor" onchange="sumar()">
                                    <option selected value="">Sin asignar profesor</option>
                                    @foreach($teacher as $teachers)
                                        <option value="{{$teachers->id}}">
                                            {{$teachers->name}} {{$teachers->lastnames}} {{$teachers->degree}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Seleccione profesor</label>
                            </div>
                            <div>
                                <button type="submit" id="envio" class="btn btn-success" disabled>
                                    <span><i class="fas fa-folder-plus"></i> Guardar</span>
                                </button>
                                <button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
    
@endsection

