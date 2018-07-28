@foreach($deliveries as $delivery)
	<div style="background: #777; margin: 20px; padding: 20px; color:white;">

		<b>Servicio:</b> {{ $delivery->start_loc }} - {{ $delivery->end_loc }} - {{ $delivery->start_date }}
		<br>
		<b>Transporte:</b> {{ $delivery->vehicle->name }}
		<br>
		<b>Dispositivo:</b> {{ $delivery->device->name }}
		<br>
	</div>
@endforeach

<form action="{{ route('add') }}">
		<button type="submit">Añadir</button>
</form>
