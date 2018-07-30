<form action="{{ route('vehicle_delete') }}">
	<fieldset>
		<legend>Eliminar vehiculo</legend>
		<label for="">Seleccionar vehiculo</label>
		<select name="vehicle_id" id="">
			@foreach($vehicles as $vehicle)
				<option value="{{ $vehicle->id }}">{{ $vehicle->name }}-{{ $vehicle->domain }}-{{ $vehicle->equipment }}</option>
			@endforeach
		</select>
		<button type="submit">Eliminar</button>
	</fieldset>
</form>
