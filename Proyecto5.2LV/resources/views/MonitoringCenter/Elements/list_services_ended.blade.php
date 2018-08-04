SERVICIOS FINALIZADOS <br>

@if(count($endedDeliveries))
    @foreach ($endedDeliveries as $delivery)
        <a href="{{ route('', $delivery->id ) }}"> {{ $delivery->service_name }} </a> <br>
    @endforeach
@else
    No hay viajes finalizados <br>
@endif
