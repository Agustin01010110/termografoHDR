@if( count($records) > 0 )
    @foreach ($records as $record)
        Temperatura: {{ $record->temp }}
    @endforeach
@else
    Todavia no hay registros para este viaje.
@endif
