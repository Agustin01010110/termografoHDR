<form action="{{ route('delivery_store') }}">
	<fieldset>
		<legend>Entrega</legend>
		<label for="">Transporte</label>
		<select name="vehicle_id">
			@foreach($vehicles as $vehicle)
			<option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
			@endforeach
		</select>
		<label for="">Dispositivo</label>
		<select name="device_id" id="">
			@foreach($devices as $device)
				<option value="{{ $device->id }}">{{ $device->name }}</option>
			@endforeach
		</select>

		<label for="">Origen</label>
		<input type="text" name="start_loc">
		<label for="">Destino</label>
		<input type="text" name="end_loc">

		<label for="">Hora Inicio</label>
		<input type="text" name="start_date">
		<label for="">Hora Fin</label>
		<input type="text" name="end_date">

		<button type="submit">Enviar</button>

	</fieldset>
</form>
