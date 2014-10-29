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
			<li class="item">
				<a href="{{route('register')}}"><span class="icon icon-home"></span>Capturas de registros</a>
			</li>
			<li class="item">
				<a href="{{route('analytics')}}"><span class="icon icon-calculator"></span>Calculo de vulnarabilidad metodo de la UAM</a>
			</li>
			<li class="item logo"><img src="{{asset('images/logo.png')}}" alt="" width="25"></li>
		</ul>
	</header>
	
	@yield('content')
	
	@yield('script')
</body>
</html>