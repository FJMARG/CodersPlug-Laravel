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
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img src="/img/title.png" width="150" height="auto" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item actived">
                        <a class="nav-link blanco" href="/">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link blanco" href="/preguntas">Question</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link blanco" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link blanco" href="/register">Register</a>
                    </li>
                </ul>
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary dropdown-toggle fuente" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">¿Ya tenes cuenta? <p>inicia sesion</p></button>
                    <div class="dropdown-menu fuente">
                        <form class="px-4 py-3" action="/login" method="POST">
                            <div class="form-group">
                                <input type="email" class="form-control" name="login_email" id="login_email" placeholder="Ingresa tu email" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Ingresa tu password" required>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="dropdownCheck" name="recordar">
                                    <label class="form-check-label" for="dropdownCheck">Recordar usuario</label>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Entrar">
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/">Olvide mi password</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section>
        @yield('cuerpo')
    </section>
    <footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </footer>
</body>
</html>