@extends("layout")
@section("titulo")
  <title>CodersPlug - Registro</title>
@endsection
@section("cuerpo")
<div class="container">
  	  	<div class="row">
  	  		<div class="col-lg-5 col-sm-12 centro">
  				<div class="row">
            @if(count($errors)>0)
                <div class="alert alert-danger"> 
                  <ul>
				  	@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				  </ul>
				</div>
			@endif
			@isset($msj)
				<div class="alert alert-success">
					<p>{{$msj}}</p>
				</div>
			@endisset
            <div class="col-12 text-center">
              <h2 class="blanco">Forma parte de <span class="verde">Coders</span>Plug</h2>
            </div>
            <div class="cards">
              <article class="card-body">
                <form method="post" action="/register" enctype="multipart/form-data" onsubmit="return validar()">
                  {{csrf_field()}}
                  <div class="form-group">
                    <div class="input-group mb-3">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="foto" name="foto">
                        <label class="custom-file-label">Subi tu foto de perfil</label>
                      </div>
                    </div>
                  </div>
                    <!--TIPO DE USUARIO-->
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="rol">Tipo de usuario</label>
                        </div>
                        <select class="custom-select" id="rol" name="rol">
                          <option @if( old('rol') == 1) selected @endif value="1">Coder</option>
                          <option @if( old('rol') == 2) selected @endif value="2">Recruiter</option>
                          <option @if( old('rol') == 3) selected @endif value="3">Enterprise</option>
                        </select>
                      </div>
                    </div>                  
                  <div class="form-row">
                    <div class="col form-group ">  
                      <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" value="{{old('nombre')}}">
                    </div> <!-- form-group -->
                    <div class="col form-group">
                      <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" value="{{old('apellido')}}">
                    </div> <!-- form-group -->
                  </div> <!-- form-row -->
                  <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Correo electronico" value="{{old('email')}}">  
                  </div>
                  <!--Pregunta secreta-->
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Respuesta" id="respuesta" name="respuesta" value="{{old('respuesta')}}">
                           <select class="custom-select" id="pregunta" name="pregunta">
                              <option selected>Pregunta secreta</option>
                              <option value="1" @if( old('pregunta') == 1) selected @endif>Amor platonico</option>
                              <option value="2" @if( old('pregunta') == 2) selected @endif>1ra Mascota de la infancia</option>
                              <option value="3" @if( old('pregunta') == 3) selected @endif>Apellido materno</option>
                              <option value="4" @if( old('pregunta') == 4) selected @endif>Primer empleo</option>
                              <option value="5" @if( old('pregunta') == 5) selected @endif>Nombre de tu primer pareja</option>
                            </select>
                        </div>
                   <!-- form-group -->
                  <div class="form-group">
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sexo" value="M" @if( old('genero') == 'M') checked @endif required>
                      <span class="form-check-label"> Masculino </span>
                    </label>
                    <label class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="sexo" value="F" @if(old('genero') == 'F') checked @endif>
                      <span class="form-check-label"> Femenino</span>
                    </label>
                  </div> <!-- form-group -->
                  <div class="form-group">
                    <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña">
                  </div> <!-- form-group -->
                  <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Registrarse</button>
                  </div> <!-- form-group -->                                                
                </form>
              </article> <!-- card-body -->
            </div> <!-- card -->
    </div> <!-- row -->
  			</div>
  			<div class="col-lg-7 d-none d-lg-block centro ">
  				<img class="img-fluid" src="/img/logop1.png">
  			</div>
  	  	</div>
  </div>
  <script src="/js/validar_registro.js"></script>
@endsection