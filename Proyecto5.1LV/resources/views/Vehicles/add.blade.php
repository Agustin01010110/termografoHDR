<form action="{{ route('vehicle_store') }}">
	<fieldset>
		<legend>añadir vehiculo</legend>


		<label for="">Modelo</label>
		<input type="text" name="name">
		<label for="">Dominio</label>
		<input type="text" name="domain">
		<label for="">Equipo de frio</label>
		<input type="text" name="equipment">

		<button type="submit">Enviar</button>

	</fieldset>
</form>
