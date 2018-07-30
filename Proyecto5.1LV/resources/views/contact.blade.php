@extends('layouts.agus')
@section('newcontent')
<div class="container animated fadeIn">

  <div class="row">
    <!--<h1 class="header-title"> Contact </h1>-->
    <hr>
    <div class="col-md-12" id="parent">
    	<div class="col-md-6">
    	      <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=11%20de%20abril%20461%20bahia%20blanca&key=AIzaSyCtkCyO9ZwHPJ2F7WOnvVfeFPm9cruMz0w" allowfullscreen></iframe>
      </div>

    	<div class="col-md-6">
    		<form action="form.php" class="contact-form" method="post">

		        <div class="form-group">
		          <input type="text" class="form-control" id="name" name="nm" placeholder="Nombre" required="" autofocus="">
		        </div>


		        <div class="form-group">
		          <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
		        </div>

		      <div class="form-group">
		           <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Telefono" required="">
		      </div>
		      <div class="form-group">
		      <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Escriba su mensaje aqui..." required=""></textarea>
		      <br>
	      	  <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Enviar </button>
		      </div>
     		</form>
    	</div>

    </div>
  </div>

  <div class="container second-portion">
	<div class="row">
        <!-- Boxes de Acoes -->
    	<div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">
				<div class="icon">
					<!--  <div class="image"><i class="fa fa-envelope" aria-hidden="false"></i></div> -->
					<div class="info">
						<h3 class="title">MAIL & SITIO WEB</h3>
						<p>
							<i class="fa fa-envelope" aria-hidden="true"></i> &nbsp aevilo@hotmail.com
							<br>
							<br>
							<i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hdrloggers.com
						</p>

					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">
				<div class="icon">
					<!--<div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>-->
					<div class="info">
						<h3 class="title">TELEFONO</h3>
    					<p>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+54)291-4054422
							<br>
							<br>
							<i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  (+54)291-4439263
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
			<div class="box">
				<div class="icon">
					<!--<div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>-->
					<div class="info">
						<h3 class="title">DIRECCION</h3>
    					<p>
							 <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 11 de Abril 461, Bahia Blanca Buenos Aires Argentina CP.:8000
						</p>
					</div>
				</div>
				<div class="space"></div>
			</div>
		</div>
		<!-- /Boxes de Acoes -->

		<!--My Portfolio  dont Copy this -->

	</div>
</div>

</div>
@endsection
