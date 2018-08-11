DISPOSITIVOS <br>

@if(count($devices))
<div class="col-sm-6">
  <label for="">Elija el dispositivo</label><br>
    @foreach ($devices as $device)
      <a href="#">{{ $device->name }}</a> <br>
    @endforeach
</div>
@else
    No hay viajes del dispositivo seleccionado <br>
@endif
