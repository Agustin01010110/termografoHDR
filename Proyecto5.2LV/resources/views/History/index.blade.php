@extends('layouts.app')
@section('content')

<form class="col-sm-6" action="{{ route('fetch-between-dates', $vehicles->id, $devices->id) }}" method="get" onsubmit = "false">

  <fieldset>
    <legend>Historial</legend>
    <h6>Ingrese mes y año del viaje</h6>

    <input type="text" id="datepicker1" name="year"/>
    <script type="text/javascript">
          $("#datepicker1").datepicker( {
            format: " yyyy", // Notice the Extra space at the beginning
            viewMode: "years",
            minViewMode: "years"
          });
    </script>
    <br>
    <input type="text" id="datepicker2" name="month"/>
    <script type="text/javascript">
          $("#datepicker2").datepicker( {
            format: "mm", // Notice the Extra space at the beginning
            viewMode: "months",
            minViewMode: "months",
            pickyears: false
          });
    </script>
@include('History.Elements.selector', ['devices' => $devices, 'vehicles' => $vehicles])

      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
  </fieldset>
</form>




@isset($deliveries)
  @if(count($deliveries))
      @foreach($deliveries as $delivery)
      <a href="{{route('search-deliveries-for-history', $delivery->id)}}">{{$delivery->start_loc}}-{{$delivery->end_loc}}-{{$delivery->start_date}}-{{$delivery->end_date}}</a><br>
      @endforeach
  @else
      El dispositivo no posee historial
  @endif
@endisset

@isset($records)
  @if(count($records))
    Muestras del viaje:
      @include('MonitoringCenter.Elements.show_dash',['records'=>$records])
  @else
      @no existen registros de ese servicio
  @endif
@endisset

@endsection
