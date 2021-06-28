<div class="modal fade" id="myModal{{$assets->id}}" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close ms-auto" data-dismiss="modal">X</button>
        </div>
        <div class="modal-body">
            <p>¿Esta seguro que quiere dar de baja al activo fijo?</p>
        </div>
        <div class="modal-footer">
            <form action="{{route('activos.delete',$assets->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">
                    Confirmar
                </button>
            </form> 
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
    </div>
    
    </div>
</div>