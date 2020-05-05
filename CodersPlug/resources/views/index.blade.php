@extends("layout")
@section("titulo")
  <title>CodersPlug - Inicio</title>
@endsection
@section("cuerpo")
<div class="container">
        <?php if (isset($args["msj"])): ?>
        <div>
          <?= $args["msj"]->getDisplay()." ".$args["msj"]->getMsj();?>
        </div>
        <?php endif ?>
  	  	<div class="row">
  	  		<div class="col-lg-5 col-sm-12 centro">
  				<section>
  					<img src="/img/title.png" class="img-fluid"><!-- Cambiar por public de laravel -->
  					<article class="text-center"><p class="blanco">Sitio de reunion para programadores, estudiantes , reclutadores y empresas IT</p></article>
  				</section>
  			</div>
  			<div class="col-lg-7 d-none d-lg-block centro ">
  				<img class="img-fluid" src="/img/logop1.png"><!-- Cambiar por public de laravel -->
  			</div>
  	  	</div>
  </div>
@endsection