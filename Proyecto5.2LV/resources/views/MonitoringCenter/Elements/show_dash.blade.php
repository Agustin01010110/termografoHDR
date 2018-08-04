<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/locale/es.js"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script src="{{ asset('js/highstock.js')  }}"></script>
<script src="{{ asset('js/poll.js')  }}"></script>


@if( count($records) > 0 )

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
            selected: 2
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
            pointStart: date,
            pointInterval: 60 * 1000,
            data: data1,
            tooltip: {
                valueDecimals: 2
            }
        }],

        events:{
          redraw:true
        }
    });
    </script>

@else
    Todavia no hay registros para este viaje.
@endif
