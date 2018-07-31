SERVICIOS ACTIVOS <br>

@if(count($activeDeliveries))
    @foreach ($activeDeliveries as $delivery)
        <a href="{{ route('monitoring-center-for', $delivery->id ) }}"> {{ $delivery->service_name }} </a> <br>
    @endforeach
@else
    No hay viajes activos <br>
@endif
