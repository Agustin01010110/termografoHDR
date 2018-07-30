@extends('layouts.agus')
@section('newcontent')

    		<div class="col-md-3">
    			<form action="{{ route('store') }}" method="get">

    				<fieldset>
    					<legend>Datos de la UTA</legend>
						<div class="form-group">
							<label for="time">Hora</label>
	    					<input  class="form-control" id="time" name="time" placeholder="hora">
						</div>
						<div class="form-group">
							<label for="temp">Temperatura</label>
							<input  class="form-control" id="temp" name= "temp" placeholder="temperatura">
						</div>

            <div class="form-group">
              <label for="dev_name">Nombre</label>
              <input  class="form-control" id="dev_name" name= "dev_name" placeholder="APARATO-XXXX">
            </div>

            <div class="form-group">
              <label for="id_dato">id_dato</label>
              <input  class="form-control" id="id_dato" name= "id_dato" placeholder="xx">
            </div>

    				</fieldset>
            <button type="submit" class="btn btn-primary">Enviar</button>
    			</form>
    		</div>


<div class="" id="mydiv" align="center">

</div>


<form id="form1">
  <fieldset>
    <legend>Vehiculo</legend>
  <div class="col-md-3">
    <label for="name">Modelo</label>
    <input type="text" class="form-control" id="name" placeholder="Modelo vehiculo">
  </div>
  <div class="col-md-3">
    <label for="domain">Dominio</label>
    <input type="text" class="form-control" id="domain" placeholder="AA-XXX-BB">
  </div>
  <div class="col-md-3">
    <label for="equipment">Eq.Frio</label>
    <input type="text" class="form-control" id="equipment" placeholder="Equipo Frio">
  </div>
  <br>
  </fieldset>

  <fieldset>
    <legend>Viaje</legend>
  <div class="col-md-3">
    <label for="start_loc">Ciudad origen</label>
    <input type="text" class="form-control" id="start_loc" placeholder="Ciudad de Origen">
  </div>
  <div class="col-md-3">
    <label for="end_loc">Ciudad destino</label>
    <input type="text" class="form-control" id="end_loc" placeholder="Ciudad destino">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Enviar</button>
  </fieldset>
</form>


<div class="right">
  <div id="container">

  </div>
</div>

      <table class="table">
        <thead>
          <tr>
            <th>Temperatura</th>
            <th>Tiempo</th>
          </tr>
        </thead>
        <tbody>
          @foreach($records as $record)
            <tr>
              <td>{{ $record->temp }}</td>
              <td>{{ $record->time }}</td>
              <td>{{ $record->dev_name }}</td>
              <td>{{ $record->delivery_id}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
@include('elements.chart')


<script type="text/javascript">
  function myfunction()
  {
    $("#form1").toggle();

  }
</script>

<script type="text/javascript">
  $(document).ready(function(){
      $("#form1").hide();
  });
</script>




@endsection
