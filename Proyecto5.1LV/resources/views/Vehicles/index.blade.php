@foreach($vehicles as $vehicle)
	<div style="background: #777; margin: 20px; padding: 20px; color:white;">

		<b>Vehiculo:</b> {{ $vehicle->name }} - {{ $vehicle->domain }} - {{ $vehicle->equipment }}
		<br>
	</div>
@endforeach
