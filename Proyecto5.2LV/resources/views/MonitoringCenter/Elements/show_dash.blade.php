<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/es.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="{{ asset('js/highstock.js')  }}"></script>
<script src="{{ asset('js/poll.js')  }}"></script>


@if( count($records) > 0 )
    @isset($service)
        <h1 style="text-align:center">{{ $service->service_name }}</h1>
        <h3 style="text-align:center; color: #777">
            Camion: {{ $service->vehicle->name }} |
            Dispositivo:  {{ $service->device->name }}
        </h3>
    @endisset

    <div class="d-flex justify-content-center">
      <div class="col-md-6" id="container">

      </div>
    </div>
    <script type="text/javascript">
    var data1 = [
        @foreach ($records as $record)
            [

                moment("{{ $record->time }}").format('YYYY-MM-DD HH:mm:ss'),
                {{ $record->temp }}
            ]

          @if (!$loop->last)
              ,
          @endif
        @endforeach
    ];

    var lastId = {{ $records->last()->id }}
    var startDate = new Date( "{{ $records->first()->time }}")
    var endDate = new Date( "{{ $records->last()->time }}")
    var date = startDate.getTime()
    var hc = Highcharts.stockChart('container',{
      rangeSelector: {

          },

        title: {
            text: 'Temperatura'
        },

        xAxis: {
            type: 'datetime',
            dateTimeLabelFormats: {
                day: '%e of %b'
            }
        },
        yAxis: {
            floor: -10,
            ceiling: 20,
        },
        series: [{
            name: 'Temperatura',
            pointStart: date-10800000,
            pointInterval: (60 * 1000)*{{ $sampleInterval }},
            data: data1,
            tooltip: {
                valueDecimals: 2
            }
        }],

        events:{
          redraw:true
        }
    });
    </script><br>


    <table class="table">
  <thead>
    <tr>
      <th scope="col">#dato</th>
      <th scope="col">Temp.[°]</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
    @foreach($records as $record)
    <tr>
      <td>{{$record->id_data}}</td>
      <td>{{$record->temp}}</td>
      <td>{{$record->time}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@else
    Todavia no hay registros para este viaje.
@endif
