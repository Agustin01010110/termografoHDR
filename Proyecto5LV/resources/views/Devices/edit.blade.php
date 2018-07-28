<form action="{{ route('device_edit') }}">
	<fieldset>
		<legend>Editar dispositivo</legend>
		<label for="">Seleccionar dispositivo</label>
		<select name="device_id" id="">
			@foreach($devices as $device)
				<option value="{{ $device->id }}">{{ $device->name }}</option>
			@endforeach
		</select>
    <label for="">Cambiar estado</label>
    <input type="checkbox" name="active">Active<br>
		<button type="submit">Editar</button>

	</fieldset>
</form>
