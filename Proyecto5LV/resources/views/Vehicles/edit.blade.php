<form action="{{ route('vehicle_edit') }}">
	<fieldset>
		<legend>Editar vehiculo</legend>
		<label for="">Seleccionar vehiculo</label>
		<select name="vehicle_id" id="">
			@foreach($vehicles as $vehicle)
				<option value="{{ $vehicle->id }}">{{ $vehicle->name }}-{{ $vehicle->domain }}-{{ $vehicle->equipment }}</option>
			@endforeach
		</select>
    <label for="">Modelo</label>
    <input type="text" name="name" placeholder="modelo nuevo">
    <label for="">Dominio</label>
    <input type="text" name="domain" placeholder="dominio nuevo">
    <label for="">equipo de frio</label>
    <input type="text" name="equipment" placeholder="equipo nuevo">

		<button type="submit">Editar</button>

	</fieldset>
</form>
