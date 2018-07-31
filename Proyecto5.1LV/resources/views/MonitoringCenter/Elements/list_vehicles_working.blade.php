CAMIONES ACTIVOS <br>

@if(count($activeDeliveries))
    @foreach ($activeDeliveries as $delivery)
        <a href="{{ route('monitoring-center-for', $delivery->id ) }}"> {{ $delivery->vehicle->name }} </a> <br>
    @endforeach
@else
    No hay camiones activos <br>
@endif
