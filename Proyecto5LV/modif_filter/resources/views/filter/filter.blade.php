<form action="{{ route('search') }}">
  <fieldset>
    <legend>Filtrar por fecha</legend>
    <label for="from">Desde</label>
    <input type="text" name="from" placeholder="Fecha desde">
    <label for="to">Hasta</label>
    <input type="text" name="to" placeholder="Fecha hasta">
    <label for="dev">Seleccionar dispositivo</label>
    <select class="" name="device_id">
      @foreach($devices as $device)
        <option value="{{ $device->id }}">{{ $device->name }}</option>
      @endforeach
    </select>
    <button type="submit" name="button">Filtrar</button>
  </fieldset>
</form>


@isset ($filters)
<table class="table">
  <thead>
    <tr>
      <th>Destino</th>
      <th>Partida</th>
      <th>Dispositivo</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($filters as $filter)
      <tr>
        <td>{{ $filter->start_loc}}</td>
        <br>
        <td>{{ $filter->start_date}}</td>
        <br>
        <td>{{ $filter->device_id}}</td>
      </tr>
      <br/>
    @endforeach
  </tbody>
</table>
@endisset
