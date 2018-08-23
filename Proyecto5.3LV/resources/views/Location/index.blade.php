@extends('Layouts.app')
@section('content')


SERVICIOS ACTIVOS <br>

@if(count($activeDeliveries))
    @foreach ($activeDeliveries as $delivery)
        <a href="#"> {{ $delivery->service_name }} </a> <br>
    @endforeach
@else
    No hay viajes activos <br>
@endif

<div class="col-sm-6">

  <div id="map" style="height: 600px;">

  </div>
</div>


<script type="text/javascript">

  var map = L.map('map');


  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}{r}.png', {
      attribution: '© OpenStreetMap contributors'
  }).addTo(map);

  L.Routing.control({
      waypoints: [
          L.latLng(-38.706757, -62.256909),
          L.latLng(-38.705958, -62.257534),
          L.latLng(-38.705054, -62.259020),
          L.latLng(-38.704282, -62.260302),
          L.latLng(-38.705232, -62.261606),
          L.latLng(-37.6167, -62.4167),

      ],
      routeWhileDragging: true
  }).addTo(map);

</script>


@endsection
