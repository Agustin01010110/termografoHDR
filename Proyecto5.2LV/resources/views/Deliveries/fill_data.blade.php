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

            <button type="submit">GUARDAR</button>
        </fieldset>
    </form>
@else
    No hay viajes para este dispositivo

@endif
