<div class="modal fade" @if(@isset($assets))id="myModal{{$assets->id}}"@elseif(@isset($environments))id="myModal{{$environments->id}}"{{$environments->id}}@elseif(@isset($teachers))id="myModal{{$teachers->id}}"@endif role="dialog">
    <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close ms-auto" data-dismiss="modal">X</button>
        </div>
        @if(@isset($assets))
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
        @elseif(@isset($environments))
            <div class="modal-body">
                <p>¿Esta seguro que quiere eliminar esta aula?</p>
            </div>
            <div class="modal-footer">
                <form action="{{route('activos.updates',$environments->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-danger" type="submit">
                        Confirmar
                    </button>
                </form>
        @elseif(@isset($teachers))
            <div class="modal-body">
                <p>¿Esta seguro que quiere eliminar este profesor?</p>
            </div>
            <div class="modal-footer">
        @endif
            
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
    </div>
    
    </div>
</div>