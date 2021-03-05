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
        @foreach($activos as $activo)
            <tr>
                <td style="border: 1px solid">{{$activo->marca}}</td>
                <td style="border: 1px solid">{{$activo->color}}</td>
                <td style="border: 1px solid">{{$activo->referencia}}</td>
                <td style="border: 1px solid">{{$activo->numeroSerial}}</td>
                <td style="border: 1px solid">{{$activo->categoria}}</td>
                <td style="border: 1px solid">{{$activo->fechaIngreso}}</td>
                <td style="border: 1px solid">{{$activo->mantenimiento}}</td>
            </tr>
        @endforeach
    </tbody>
</table>