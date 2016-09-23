<!DOCTYPE html>
<html lang="br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/prism.css') }}" rel="stylesheet">

	<!--Fontes -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel="stylesheet" type="text/css">

	<!--HTML5 shim e Respond.js para IE8 suportar elementos HTML5 e media queries-->
	<!--Cuidado: Respond.js não funcionará se estiver salvo como arquivo-->
	<!--[if lt IE 9]>
		<script src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"> </script>
		<script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
	<!--[endif]-->
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="28" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Vitor Lima</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Inicio</a></li>
					<li><a href="{{ url('/codigos') }}">Códigos</a> </li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if(Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Entrar</a></li>
						<li><a href="{{ url('/auth/register') }}">Registrar</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="49" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout')}}"></a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')
	<!--Scripts-->
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="{{ asset('/js/prism.js') }}"></script>
</body>
</html>