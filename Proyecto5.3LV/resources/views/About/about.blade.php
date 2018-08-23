@extends('Layouts.app')
@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">HDRloggers</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
<h1>Sobre el Proyecto...</h1>
<p>Este dispositivo se desarrolló como Proyecto Final de Ingenieria Electronica de la UTN - FRBB
  . Este surge de la necesidad de los organismos de control de mantener el estado de los alimentos
  transportados de tener un control confiable y a su vez de las empresas encargadas
  de la logistica de poseer un control en tiempo real de la carga en una
  unidad de transporte. De esta forma se busca garantizar el buen estado del producto
  en toda la cadena de logistica desde su produccion hasta el consumidor</p>

  <p>El equipo de trabajo esta conformado por 3 estudiantes avanzados de Ingenieria Electronica</p>

  <p></p>



  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="images/male.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="images/male.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="images/male.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>

  <img src="images/utn2.png" class="rounded float-right" alt="Responsive image">


@endsection
