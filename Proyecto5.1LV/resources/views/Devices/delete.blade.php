<form action="{{ route('device_delete') }}">
	<fieldset>
		<legend>Eliminar dispositivo</legend>
		<label for="">Seleccionar dispositivo</label>
		<select name="device_id" id="">
			@foreach($devices as $device)
				<option value="{{ $device->id }}">{{ $device->name }}</option>
			@endforeach
		</select>
		<button type="submit">Eliminar</button>

	</fieldset>
</form>
