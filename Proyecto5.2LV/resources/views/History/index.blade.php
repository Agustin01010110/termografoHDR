@extends('layouts.app')
@section('content')

<form class="col-sm-6" action="{{ route('fetch-between-dates') }}" method="get" onsubmit = "false">

  <fieldset>
    <legend>Historial</legend>
    <h6>Ingrese mes y año del viaje</h6>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                        <input type="text" name="from" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker4').datetimepicker({
                        format: 'YYYY-MM-DD'
                    });
                });
            </script>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker5" data-target-input="nearest">
                        <input type="text" name="to" class="form-control datetimepicker-input" data-target="#datetimepicker5"/>
                        <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#datetimepicker5').datetimepicker({
                        format: 'YYYY-MM-DD'
                    });
                });
            </script>
        </div>
    </div>


    <div class="" id="vehicle">

      <label for="vehicle">Ingrese nombre vehiculo</label><br>
      <select class="" name="vehicle">
        <option value="NULL">(ninguno)</option>
        @foreach($vehicles as $vehicle)
        <option value="{{$vehicle->id}}">{{$vehicle->name}}</option>
        @endforeach
      </select><br>
    </div>

    <div class="" id="device">

      <label for="device" id="device">Ingrese nombre del dispositivo</label><br>
      <select class="" name="device">
          <option value="NULL">(ninguno)</option>
        @foreach($devices as $device)
          <option value="{{$device->id}}">{{$device->name}}</option>
        @endforeach
      </select><br>
    </div>

    <script>
        $(document).ready(function(){
            $("#device").click(function(){
                $("#vehicle").hide();
            });

            $("#vehicle").click(function(){
                $("#device").hide();
            });
          });
    </script>
      <br><button type="submit" class="btn btn-primary">Buscar</button>
    </div>
  </fieldset>
</form>
<br>

@if(count($deliveries))
  <div class="col-sm-6">
    <h6>Viajes Completados</h6>
    <div class="list-group" name="doneDeliveries">
      @foreach($deliveries as $delivery)
        <a href="{{route('search-records-for-history', $delivery->id)}}" class="list-group-item list-group-item-action">{{$delivery->service_name}}</a>
      @endforeach
    </div>
  </div>
@else
  No se encontraron viajes
@endif
<br>



<!-- @isset($records)
  @if(count($records))
    Muestras del viaje:
      @include('MonitoringCenter.Elements.show_dash',['records'=>$records])
  @else
      @no existen registros de ese servicio
  @endif
@endisset

@endsection -->
