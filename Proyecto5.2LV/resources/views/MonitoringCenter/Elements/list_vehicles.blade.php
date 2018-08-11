VEHICULOS <br>

@if(count($vehicles))
<div class="col-sm-6">
  <label for="">Elija el vehiculo</label><br>
    @foreach ($vehicles as $vehicle)
      <a href="#"> {{ $vehicle->name }} </a> <br>
    @endforeach
</div>
@else
    No hay viajes del vehiculo seleccionado <br>
@endif
