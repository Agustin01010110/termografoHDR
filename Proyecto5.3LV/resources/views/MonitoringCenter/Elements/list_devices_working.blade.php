DISPOSITIVOS TRABAJANDO <br>
@if(count($activeDevices))
    @foreach ($activeDevices as $device)
        <a href=" {{ route('monitoring-center-for-device', $device->id) }} ">{{ $device->name }}</a> <br>
    @endforeach
@else
    No hay dispositivos activos <br>
@endif
