@extends('layouts.agus')
@section('newcontent')

<form class="" action="{{ route('fetch') }}" method="post" onsubmit = "false">
  {{ csrf_field() }}
  <fieldset>
    <legend>Historial</legend>
    <h6>Ingrese fecha y hora del viaje</h6>
    <div class="row">
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <div class="form-group">
                      <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                          <input type="text" name = "from" class="form-control datetimepicker-input" data-target="#datetimepicker2" />
                          <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
              </div>
              <script type="text/javascript">
                  $(function () {
                      $('#datetimepicker2').datetimepicker({
                          format: 'YYYY-MM-DD HH:mm:ss'
                      });
                  });
              </script>
          </div>
      </div>

      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <div class="form-group">
                      <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                          <input type="text" name = "to" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                          <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
              </div>
              <script type="text/javascript">
                  $(function () {
                      $('#datetimepicker1').datetimepicker({
                          format: 'YYYY-MM-DD HH:mm:ss'
                      });
                  });
              </script>
          </div>
      </div>

      <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
  </fieldset>
</form>

@isset($records)

<div class="right">
  <div id="container">

  </div>
</div>



@include('elements.2chart')


@endisset
@endsection
