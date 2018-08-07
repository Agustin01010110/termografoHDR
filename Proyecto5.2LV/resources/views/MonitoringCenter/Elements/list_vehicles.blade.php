VEHICULOS <br>

@if(count($vehicles))
<div class="col-sm-6">
  <label for="exampleFormControlSelect2">Elija el vehiculo</label>
  <select multiple class="form-control" id="exampleFormControlSelect2">
    @foreach ($vehicles as $vehicle)
      <option value="{{$vehicle->id}}">{{$vehicle->name}}</option>
    @endforeach
  </select>
</div>
@else
    No hay viajes del vehiculo seleccionado <br>
@endif
