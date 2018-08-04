SERVICIOS ACTIVOS <br>

@if(count($devices))
    @foreach ($devices as $device)
        <a href="{{ route('', $delivery->id ) }}"> {{ $device-> }} </a> <br>
    @endforeach
@else
    No hay dispositivos <br>
@endif
