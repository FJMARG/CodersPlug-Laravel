@extends('loggedlayout')
@section('titulo')
  <title>CodersPlug - Board</title>
@endsection
@section('seccion')
	<h2 class="blanco "><span class="verde">B</span>oard</h2>
@endsection
@section('body')
<div class="fixed">
	<div class="row post">
		<div class="col-12">
			<div class="form-group">
				<br>
				<form action="/addPost" method="POST" onsubmit="return validar()">
					{{csrf_field()}}
					<label for="titulo"><h4>Titulo:</h4></label>
					<input type="text" id="titulo" name="titulo" class="form-control comentarios margin2">
					<textarea id="texto" class="form-control comentarios margin2" name="post" placeholder="Escribi tu comentario"></textarea>
					<input type="submit" class="btn btn-warning" value="POSTEAR">
				</form>
			</div>
		</div>
	</div>
	@foreach ($posts as $key)
	<div class="post">
		<div class="row">
			<div class="col-2">
				<img src="{{ $key->usuario->perfil->url_foto }}">
			</div>
			<div class="col-10 name">
				<h3 style="color:#ebe770;">{{$key->usuario->nombre}} {{$key->usuario->apellido}}</h3>
				<!-- <p class="blanco">hace </p> -->
			</div>
		</div>
		<!--ROW-->
		<div class="comentario">
			<h5 class="blanco">{{ $key -> titulo }}</h5>
			<p>
				{{ $key -> texto }}
			</p>
		</div>
		<div class="form-group">
			<a href="/verDetallesPost/{{ $key -> id }}"><h4>Ver detalles</h4></a>
		</div>
	</div>
	@endforeach
</div>
<div class="d-block d-sm-block d-md-none">
	<a href="/board"><img class="menuflotante" src="/assets/img/menu.png"></a>
</div>
<script src="/js/validar_post.js"></script>
@endsection
