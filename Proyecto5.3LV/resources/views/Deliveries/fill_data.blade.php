@if($delivery)
<form action="{{ route('set-delivery-data') }}" method="get">
    <fieldset>
        <legend>ALTA DE SERVICIO</legend>
        <input type="hidden" name="id" value={{ $delivery->id }} >
        <label for="">LUGAR DE ORIGEN</label>
        <input type="text" name="start_loc">
        <label for="">LUGAR DE DESTINO</label>
        <input type="text" name="end_loc">

        <label for="">VEHÍCULO</label>
        <select name="vehicle_id" id="">
            @foreach ($vehicles as $vehicle)
                <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
            @endforeach
        </select>
        <br>
        <br>
        <label for="mode">MODO DE CARGA</label>
        <select name="mode" id="">
          <option value="refrigerado">Refrigerado</option>
          <option value="congelado">Congelado</option>
          <option value="supercongelado">Supercongelado</option>
        </select>
        <label for="sample_time">PERIODO MUESTREO DATOS [min]</label>
        <select name="sample_time" id="">
          <option value="0.5">0.5</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="5">5</option>
        </select>
        <label for="updt_time">PERIODO ACTUALIZACION DATOS [min]</label>
        <select name="updt_time" id="">
          <option value="10">10</option>
          <option value="20">20</option>
          <option value="30">30</option>
          <option value="60">60</option>
        </select>
        
        <button type="submit">GUARDAR</button>
    </fieldset>
</form>
@else
    No hay viajes para este dispositivo

@endif
