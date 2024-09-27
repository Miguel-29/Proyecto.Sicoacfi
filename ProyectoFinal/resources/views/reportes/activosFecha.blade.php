{{-- <img src="{{asset('/images/Logo4.png')}}" width="40" height="40"> --}}
<table class="table" style="width: 100%">
    <caption>Lista de activos fijos</caption>
    <thead class="table-dark">
    <tr>
        <th style="border: 1px solid">Marca</th>
        <th style="border: 1px solid">Color</th>
        <th style="border: 1px solid">Referencia</th>
        <th style="border: 1px solid">Serial</th>
        <th style="border: 1px solid">Categoria</th>
        <th style="border: 1px solid">Fecha de ingreso</td>
        <th style="border: 1px solid">Mantenimiento</th>
    </tr>
    </thead>
    <tbody>        
        @foreach($asset as $assets)
            <tr>
                <td style="border: 1px solid">{{$assets->trademark}}</td>
                <td style="border: 1px solid">{{$assets->color}}</td>
                <td style="border: 1px solid">{{$assets->reference}}</td>
                <td style="border: 1px solid">{{$assets->serial_number}}</td>
                <td style="border: 1px solid">{{$assets->category}}</td>
                <td style="border: 1px solid">{{$assets->date_admission}}</td>
                <td style="border: 1px solid">{{$assets->maintenance}}</td>
            </tr>
        @endforeach
    </tbody>
</table>