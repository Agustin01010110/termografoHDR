@extends('layouts.agus')
@section('newcontent')

    		<div class="col-md-3">
    			<form action="{{ route('store') }}" method="post">

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

    				</fieldset>
            <button type="submit" class="btn btn-primary">Enviar</button>
    			</form>
    		</div>




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
            </tr>
          @endforeach
        </tbody>
      </table>
@include('elements.chart')
<label for="">V.4.4nlogin</label>
@endsection
