<html>
<head>
	@yield('titulo')
	<link rel="shortcut icon" href="/img/logop1.png" type="image/png" /><!-- Cambiar por public de laravel -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/estilo.css"><!-- Cambiar por public de laravel -->
	<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alatsi|Ubuntu&display=swap" rel="stylesheet">
</head>
</body>
@isset($msj)
	<div class="alert alert-danger">
		<p>{{ $msj }}</p>
	</div>
@endisset
<div class="container-fluid">
	<div class="row">
		<div class="col-12 d-block d-sm-block d-md-none">
			<header>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="#">
						<img src="/img/title.png" width="150" height="auto" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item actived">
								<a class="nav-link blanco" href="/board">Board <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link blanco" href="/profile">Profile <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link blanco" href="#">Works</a>
							</li>
							<li class="nav-item">
								<a class="nav-link blanco" href="#">Coders</a>
							</li>
							<li class="nav-item">
								<a class="nav-link blanco" href="#">Events</a>
							</li>
							<li class="nav-item">
								<a class="nav-link blanco" href="#">Recluiters</a>
							</li>
							<li class="nav-item">
								<a class="nav-link blanco" href="#">Courses</a>
							</li>
							<li class="nav-item">
								<a class="nav-link blanco" href="/userconfig">Cambiar configuracion</a>
							</li>
							<li class="nav-item">
								<a class="nav-link blanco" href="/friends">Friends</a>
							</li>
						</ul>

					</div>
				</nav>
			</header>
		</div>
		<div class="col-lg-3 col-md-5 d-none d-sm-none d-md-block  navaction">
			<!--/////////////////////////////////PERFIL EN GRANDE//////////////////////////////////-->
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="navbar-brand" href="/board">
					<img src="/img/title.png" width="150" height="auto" alt="">
				</a>
				<div class="profile ">
					<img class="profileimg" src="{{ $usuario -> perfil -> url_foto }}">
					<h5 class="username">{{ $usuario -> email }}</h5>
					<h4 class="rol">{{ $usuario -> rol -> nombre }}</h4>
					<div>
						<h6 class="option">Skills</h6>

						<h6 class="option">Channels</h6>

						<h6 class="option">Studies</h6>

						<h6 class="option">Interest</h6>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-5 col-md-7 col-sm-12">
			<!--/////////////////////////////////PERFIL EN CHICO//////////////////////////////////-->
			<div class="text-center d-none d-sm-none d-md-block  ">
				@yield('seccion')
			</div>
			<div class="text-center d-block d-sm-block d-md-none align-self-center profilesmall ">
				<div class="row">
					<div class="col-4">
						<img class="profileimg" style="width: 100%" src="{{ $usuario -> perfil -> url_foto }}">
					</div>
					<div class="col-7">
						<h5>{{ $usuario -> email }}</h5>
						<div class="text-left">
							<h6 class="Skillsmini">Skills</h6>
							<h6 class="Skillsmini">Channels</h6>
							<h6 class="Skillsmini">Studies</h6>
							<h6 class="Skillsmini">Interest</h6>
						</div>
						<div class="row">
							<div class="col-6">
								<button type="button" class="btn btn-light">+</button>
							</div>
							<div class="col-6">
								<button type="button" class="btn btn-light">MP</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			@yield ('body')
		</div>
		<div class="colizq col-4 d-none d-lg-block">
			<div class="col-12">
				<nav class="navbar navbar-light bg-light justify-content-between">
					<form class="form-inline" action="/friendsearch" method="get">
						<input class="form-control mr-sm-2" type="search" placeholder="Buscar en CoderPlug" name="nombre">
						<input type="submit" class="btn btn-central btn-outline-success my-2 my-sm-0" value="Buscar">
					</form>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link blanco" href="/board"><span class="verde">B</span>oard</a>
						<a class="nav-link blanco" href="/profile"><span class="verde">P</span>rofile</a>
						<a class="nav-link blanco" href="#"><span class="verde">W</span>orks</a>
						<a class="nav-link blanco" href="#"><span class="verde">C</span>oders</a>
						<a class="nav-link blanco" href="#"><span class="verde">E</span>vents</a>
						<a class="nav-link blanco" href="#"><span class="verde">R</span>ecluiters</a>
						<a class="nav-link blanco" href="#"><span class="verde">C</span>ourses</a>
						<a class="nav-link blanco" href="/friends"><span class="verde">I</span>nterest</a>
						<a class="nav-link blanco" href="/userconfig"><span class="verde">C</span>ambiar datos</a>
						<a class="nav-link blanco" href="/logout"><span class="verde">S</span>alir</a>
					</div>
				</nav>
			</div>
		</div>
	</div>
</div>
</body>
<footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</footer>
</html>