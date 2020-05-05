@extends('loggedlayout')
@section('titulo')
  <title>CodersPlug - Delete</title>
@endsection
@section('seccion')
	<h2 class="blanco "><span class="verde">D</span>elete</h2>
@endsection
@section('body')
<div class="fixed">
	<div class="row post">
		<div class="col-12">
			<div class="form-group">
				<br>
				@if($post -> usuario_id == $usuario -> id)
				<h5>¿Esta seguro que desea eliminar el post {{ $post -> titulo }}?</h5>
				<form action="/deletePost" method="POST">
					{{csrf_field()}}
					<input type="hidden" name="id" value="{{ $post -> id }}">
					<input type="submit" class="btn btn-warning" value="ELIMINAR">
				</form>
				<a href="/verDetallesPost/{{ $post -> id }}"><h4>Volver</h4></a>
				@else
					<h5>Usted no puede ver esto.</h5>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection