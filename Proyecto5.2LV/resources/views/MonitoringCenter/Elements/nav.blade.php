<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('monitoring-center') }}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="{{ route('delivery-history') }}">Historial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Ubicacion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route( 'about-us' ) }}">Nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route( 'contact-us' ) }}">Contacto</a>
      </li>
    </ul>
    <ul class="navbar-nav float-right">

    </ul>
  </div>
</nav>
