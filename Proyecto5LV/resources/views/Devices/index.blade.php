@foreach($devices as $device)
	<div style="background: #777; margin: 20px; padding: 20px; color:white;">

		<b>Nombre:</b> {{ $device->name }}
		<br>
		<b>Estado:</b> {{ $device->active }}
		<br>
	</div>
@endforeach
