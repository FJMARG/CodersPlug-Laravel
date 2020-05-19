@extends('loggedlayout')
@section('titulo')
  <title>CodersPlug - Comments</title>
@endsection
@section('seccion')
	<h2 class="blanco "><span class="verde">C</span>omments</h2>
@endsection
@section('body')
<div class="fixed">
	<div class="post">
	@if($post -> usuario_id == $usuario -> id)
		<br>
		<div class="row">
			<div class="col-2">
				<a href="/editPostForm/{{ $post -> id }}"><h4>Editar</h4></a>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<a href="/deletePostForm/{{ $post -> id }}"><h4>Eliminar</h4></a>
			</div>
		</div>
	@endif
		<div class="row">
			<div class="col-2">
				<img src="{{ $post -> usuario -> perfil -> url_foto }}">
			</div>
			<div class="col-10 name" >
				<h3 style="color:#ebe770;">{{ $post -> usuario -> nombre }} {{ $post -> usuario -> apellido }}</h3>
			</div>
		</div> <!--ROW-->
		<div class="comentario">
			<h5 class="blanco">{{ $post -> titulo }}</h5>
			<p>{{ $post -> texto }}</p>
		</div>
		<div class="form-group">
			@foreach ($post -> comentarios as $key)
			<div class="form-group">
				<div class="post">
					<div class="row">
						<div class="col-2">
							<img src="{{ $key -> usuario -> perfil -> url_foto }}">
						</div>
						<div class="col-10 name" >
							<h3 style="color:#ebe770;">{{ $key -> usuario -> nombre }} {{ $key -> usuario -> apellido }}</h3>
						</div>
					</div> <!--ROW-->
					<div class="comentario">
						<p>{{ $key -> texto }}</p>
					</div>
				</div>
			</div>
			@endforeach
			<form action="/agregarComentario" method="post" onsubmit="return validar()">
				{{csrf_field()}}
				<input type="hidden" name="idpost" value="{{ $post -> id }}">
				<div class="form-group">
					<textarea id="texto" name="comentario" class="form-control comentarios" placeholder="Escribi tu comentario"></textarea>
				</div>
				<input type="submit" class="btn btn-warning" value="Comentar">
			</form>
		</div>
	</div>
</div>
<script src="/js/validar_comments.js"></script>
@endsection
