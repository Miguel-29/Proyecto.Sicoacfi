@extends('layouts.template')
@section('title')
    Activos fijos
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    <form class="form-inline" action="{{route('activos.index')}}" method="get">
                        <input type="search" name="search" class="form-control form-control-ligth w-100" type="text" value="{{$search}}" placeholder="Search" id="search" aria-label="search">
                        <button class="btn btn-dark" id="btnsearch" onmouseover="mostrar()">Buscar</button>
                    </form>
                </div>
                <div class="card-header">
                    <h4>Lista de activos fijos</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <table class="table">
                            <caption>Lista de activos fijos</caption>
                            <thead class="table-dark">
                            <tr>
                                <th>
                                    <div style="display: flex">
                                        Marca
                                        <span style="display: flex; flex-direction: column; margin-left: 5px">
                                            <a type="button" class="fas fa-sort-up" href="{{route('activos.index')}}" style="color: white; text-decoration: none; height: 7px" ></a>
                                            <a type="button" class="fas fa-sort-down" href="{{route('activos.index',['OrderBy'=>'desc'])}}" style="color: white; text-decoration: none"></a>
                                        </span>
                                    </div>
                                </th>
                                <th>Color</th>
                                <th>Referencia</th>
                                <th>Serial</th>
                                <th>Categoria</th>
                                <th>Fecha de ingreso</td>
                                <th>Mantenimiento</th>
                                <th>Codigo aula</th>
                                <th>Responsable</th>
                                <th>Editar</th>
                                <th>Remover</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($asset as $assets)
                                <tr>
                                    <td>{{$assets->trademark}}</td>
                                    <td>{{$assets->color}}</td>
                                    <td>{{$assets->reference}}</td>
                                    <td>{{$assets->serial_number}}</td>
                                    <td>{{$assets->category}}</td>
                                    <td>{{$assets->date_admission}}</td>
                                    <td>{{$assets->maintenance}}</td>
                                    @if ($assets->idenvironment == '')
                                        <td>Sin asignar</td>
                                    @else
                                    {{$asd = 0}}
                                    @foreach($environment as $environments)
                                        @if($environments->id == $assets->idenvironment && $asd == 0)
                                            <td>
                                                {{$environments->code}}
                                            </td>
                                            {{$asd = 1}}
                                        @endif
                                    @endforeach
                                    @endif
                                    @if ($assets->idteacher == '')
                                        <td>Sin asignar</td>
                                    @else
                                    {{$asd = 0}}
                                    @foreach($teacher as $teachers)
                                        @if($teachers->id == $assets->idteacher && $asd == 0)
                                            <td>
                                                {{$teachers->name}} {{$teachers->lastnames}}
                                            </td>       
                                            {{$asd = 1}}                                     
                                        @endif
                                    @endforeach
                                    @endif
                                    <td>
                                        <a href="{{route('activos.edit',$assets->id)}}">Lapiz</a>
                                    </td>
                                    <td>
                                        <form action="{{route('activos.delete',$assets->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">
                                                <i class="fas fa-ban"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer ">
                    <div class="offset-4 offset-sm-5">
                        <div class="offset-sm-1">
                            {{$asset->appends(['search' => $search, 'OrderBy' => $order, 'showtechnology' => $showtechnology, 'showfurniture' => $showfurniture])->links('pagination::bootstrap-4')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<script>
    mostrar = () => { 
        let busqueda = document.getElementById('search');
        let boton = document.getElementById('btnsearch');
        busqueda.style.display = 'inline';
        boton.style.display = 'none';
    }
</script>
<style>
    #search {
        display: none
    }
</style>