@extends('loggedlayout')
@section('titulo')
  <title>CodersPlug - Edit</title>
@endsection
@section('seccion')
	<h2 class="blanco "><span class="verde">E</span>dit</h2>
@endsection
@section('body')
<div class="fixed">
	<div class="row post">
		<div class="col-12">
			<div class="form-group">
				<br> @if($post -> usuario_id == $usuario -> id)
				<form action="/editPost" method="POST" onsubmit="return validar()">
					{{csrf_field()}}
					<input type="hidden" name="id" value="{{ $post -> id }}">
					<label for="titulo"><h4>Titulo:</h4></label>
					<input type="text" id="titulo" name="titulo" value="{{ $post -> titulo }}" class="form-control comentarios margin2">
					<textarea id="texto" class="form-control comentarios margin2" name="texto" placeholder="Escribi tu post">{{ $post -> texto }}</textarea>
					<input type="submit" class="btn btn-warning" value="EDITAR">
				</form>
				<a href="/verDetallesPost/{{ $post -> id }}"><h4>Volver</h4></a>
				@else
				<h5>Usted no puede ver esto.</h5> @endif
			</div>
		</div>
	</div>
</div>
<script src="/js/validar_post.js"></script>
@endsection
