<!DOCTYPE html>
<html lang="en" ng-app="Sismos">
<head>
	<meta charset="UTF-8">
	<title> @yield('title') </title>
	<link rel="stylesheet" href="{{asset('css/estilos.css')}}">
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
	<script src="https://code.angularjs.org/1.2.26/angular-animate.js"></script>
	<script src="{{asset('js/app.js')}}"></script>
	@yield('stylesheet')
</head>
<body>
	<header>
		<ul class="menu">
			<li class="item">
				<a href="{{route('home')}}"><span class="icon icon-home"></span>Inicio</a>
			</li>
			
			@if( is_basico() )
				<li class="item">
					<a href="{{route('register')}}"><span class="icon icon-home"></span>Capturas de registros</a>
				</li>
			@endif
			@if( is_experto() )
				<li class="item">
					<a href="{{route('analytics')}}"><span class="icon icon-calculator"></span>Calculo de vulnarabilidad</a>
				</li>
			@endif
			
			@if( is_admin() )
				<li class="item">
					<a href="{{route('managerusers')}}"><span class="icon icon-calculator"></span>Administrar usuarios</a>
				</li>
			@endif
			@if( Auth::check() )
				<li class="item">
					<a href="{{route('logout')}}"><span class="icon icon-calculator"></span>Cerrar sesion</a>
				</li>
			@endif


			<li class="item logo"><img src="{{asset('images/logo.png')}}" alt="" width="25"></li>
		</ul>
	</header>
	
	@yield('content')
	
	@yield('script')
</body>
</html>