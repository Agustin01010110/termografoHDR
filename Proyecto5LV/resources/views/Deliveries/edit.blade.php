<form action="{{ route('delivery_edit') }}">
	<fieldset>
		<legend>Editar viaje</legend>
		<label for="">Seleccionar viaje</label>
		<select name="delivery_id" id="">
			@foreach($deliveries as $delivery)
				<option value="{{ $delivery->id }}">{{ $delivery->start_loc }}-{{ $delivery->end_loc}}</option>
			@endforeach
		</select>
    <label for="">Fecha de arribo</label>
    <input type="text" name="arrival_date" placeholder="Fecha de arribo servicio">
		<button type="submit">Agregar</button>

	</fieldset>
</form>
