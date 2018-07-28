<form action="{{ route('device_store') }}">
	<fieldset>
		<legend>Agregar dispositivo</legend>

		<label for="">Nombre</label>
		<input type="text" name="devicename">
		<label for="">Estado</label>
    <input type="checkbox" name="active">Active<br>
		<button type="submit">Enviar</button>

	</fieldset>
</form>
