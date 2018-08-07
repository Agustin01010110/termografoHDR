DISPOSITIVOS <br>

@if(count($devices))
<div class="col-sm-6">
  <label for="exampleFormControlSelect3">Elija el dispositivo</label>
  <select multiple class="form-control" id="exampleFormControlSelect3">
    @foreach ($devices as $device)
      <option>{{$device->name}}</option>
    @endforeach
  </select>
</div>
@else
    No hay viajes del dispositivo seleccionado <br>
@endif
