<form action="{{ route('delivery_delete') }}">
	<fieldset>
		<legend>Eliminar viaje</legend>
		<label for="">Seleccionar viaje</label>
		<select name="delivery_id" id="">
			@foreach($deliveries as $delivery)
				<option value="{{ $delivery->id }}">{{ $delivery->start_loc }}-{{$delivery->end_loc}}</option>
			@endforeach
		</select>
		<button type="submit">Eliminar</button>
	</fieldset>
</form>
