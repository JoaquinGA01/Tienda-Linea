<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$promo->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <form action="{{route('promociones.destroy', $promo->id)}}" method="post">
    @csrf
    @method('DELETE')
    
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Deseas eliminar la promoción {{$promo->nombre." descuento de: ".$promo->promocion}}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
      </div>
    </div>
    </form>
  </div>
</div>