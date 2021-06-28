@extends('layouts.template')
@section('title')
    Editar activos fijos
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Editar activos fijos</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="{{route('activos.update',$asset->id)}}" method="post" class="offset-lg-3 col-lg-6">
                            @csrf
                            @method('PUT')
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('trademark') empty @enderror" value="{{$asset->trademark}}" id="trademark" name="trademark" placeholder="Marca" onchange="sumar()" autofocus required>
                                <label for="trademark">Marca</label>
                                @error('trademark')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control @error('serial_number') empty @enderror" value="{{$asset->serial_number}}" id="serial_number" name="serial_number" placeholder="Serial" onchange="sumar()" required>
                                <label for="serial_number">Numero de serial</label>
                                @error('serial_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('reference') empty @enderror" value="{{$asset->reference}}" id="reference" name="reference" placeholder="Referencia" onchange="sumar()" required>
                                <label for="reference">Referencia</label>
                                @error('reference')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control @error('date_admission') empty @enderror" value="{{$asset->date_admission}}" id="date_admission" name="date_admission" placeholder="Fecha de ingreso" onchange="sumar()" required>
                                <label for="date_admission">Fecha de ingreso</label>
                                @error('date_admission')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control @error('maintenance') empty @enderror" value="{{$asset->maintenance}}" id="maintenance" name="maintenance" placeholder="Mantenimiento">
                                <label for="maintenance">Fecha de mantenimiento</label>
                                @error('maintenance')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('color') empty @enderror" value="{{$asset->color}}" id="color" name="color" placeholder="color" onchange="sumar()" required>
                                <label for="color">Color</label>
                                 @error('color')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select @error('category') empty @enderror" id="category" name="category" aria-label="Floating label select example" onchange="sumar()" required>
                                    <option selected>{{$asset->category}}</option>
                                    <option value="technology">Tecnologia</option>
                                    <option value="furniture">Muebles</option>
                                </select>
                                <label for="floatingSelect">Seleccione categoria</label>
                                @error('category')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3 ">
                                <select name="idenvironment" id="idenvironment" class="form-select @error('idenvironment') empty @enderror"aria-label="seleccionar aula">
                                    <option selected value="">
                                        @if($asset->idenvironment == '')
                                            Sin asignar aula
                                        @else
                                        @foreach($environment as $environments)
                                            @if($environments->id == $asset->idenvironment)
                                                Aula asignada Cod: {{$environments->code}}, {{$environments->floor}} 
                                            @endif
                                        @endforeach
                                        @endif
                                    </option>
                                    @foreach($environment as $environments)
                                        <option value="{{$environments->id}}">
                                            Cod: {{$environments->code}}, {{$environments->floor}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Seleccione aula</label>
                            </div>
                            <div class="form-floating ">
                                <select name="idteacher" id="idteacher" class="form-select @error('idteacher') empty @enderror" aria-label="seleccionar profesor">
                                    <option selected value="">
                                        @if($asset->idteacher == '')
                                            Sin asignar profesor
                                        @else
                                        @foreach($teacher as $teachers)
                                        @if($teachers->id == $asset->idteacher)
                                            <td>
                                                {{$teachers->name}} {{$teachers->lastnames}}, de {{$teachers->degree}}
                                            </td>
                                        @endif
                                    @endforeach
                                        @endif
                                    </option>
                                    @foreach($teacher as $teachers)
                                        <option value="{{$teachers->id}}">
                                            {{$teachers->name}} {{$teachers->lastnames}}, de {{$teachers->degree}}
                                        </option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Seleccione profesor</label>
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success" id="envio" disabled>
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
