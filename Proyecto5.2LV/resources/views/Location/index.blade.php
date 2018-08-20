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

<div class="col-sm-12">

  <div id="mapid" style="height: 300px;">

  </div>
</div>


<script type="text/javascript">
  var mymap = L.map('mapid').setView([-38.706757, -62.256909], 13);
  var marker = L.marker([-38.706757, -62.256909]).addTo(mymap);
</script>

<script type="text/javascript">
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiYWd1c3RpbjE5OTEiLCJhIjoiY2psMXJ6bG4wMWl2bDNxbGUzZ3J6eGVjeiJ9.mVGccinO5D7QzRoQR8fSLw', {
  attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
  maxZoom: 18,
  id: 'mapbox.streets',
  accessToken: 'your.mapbox.access.token'
}).addTo(mymap);

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("You clicked the map at " + e.latlng.toString())
        .openOn(mymap);
}

mymap.on('click', onMapClick);

// create a red polyline from an array of LatLng points
var latlngs = [
    [-38.706757, -62.256909],
    [-38.705958, -62.257534],
    [-38.705054, -62.259020],
    [-38.704282, -62.260302],
    [-38.705232, -62.261606],
    [-38.706379, -62.261641],
    [-38.707899, -62.263980],
    [-38.709829, -62.266764]
];
var polyline = L.polyline(latlngs, {color: 'red'}).addTo(mymap);
// zoom the map to the polyline
mymap.fitBounds(polyline.getBounds());


</script>


@endsection
