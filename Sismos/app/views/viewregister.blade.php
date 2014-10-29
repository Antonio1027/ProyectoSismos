@extends('layout')

@section('title')
	Ver Registro
@stop
@section('script')
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBpCHGsuh7cVRGRyn-ECXWybh7hq2lP_hc&sensor=true"></script>
@stop
@section('content')
	<section ng-controller="RegisterController">
		<article class="banner-left">
			<div class="banner-left-section">
				<div class="box banner-left-box">
					<span class="icon-home"></span>
				</div>
				<div class="banner-left-content">
					<ul class="list">
						<li class="list-item"><a href="{{route('newregister')}}"><span class="icon icon-add"></span> Nuevo</a></li>
						{{--<li class="list-item"><span class="icon icon-minus"></span> Borrar</li>--}}
						{{--<li class="list-item"><span class="icon icon-pen"></span> Modificar</li>--}}
						<li class="list-item"><a href="{{route('consultrecords')}}"><span class="icon icon-magnifier"></span> Buscar</a></li>
					</ul>
				</div>
			</div>

			<div class="banner-left-section text-center">
				<div class="box banner-left-box">
					<span class="icon-popout"></span>
				</div>
				<div class="banner-left-content banner-left-option">
					<div class="margin-bottom blur" ng-show="director">
						<span>Agregar nuevo director de proyecto</span>
						<input type="text" class="w100">
						<button type="submit" class="btn btn-blue" ng-click="director = !director">Agregar</button>
					</div>
					<div class="margin-bottom blur" ng-show="elaboro">
						<span>Agregar nuevo encuestador</span>
						<input type="text" class="w100">
						<button type="submit" class="btn btn-blue" ng-click="elaboro = !elaboro">Agregar</button>
					</div>
				</div>
		</article>

		{{ Form::open(['route' => 'register', 'method' => 'post', 'name' => 'formF1', 'novalidate']) }}
		<article class="banner-right" ng-init="tab1 = true">
			<div class="category" >
				<h3 class="category-title" ng-click="tab1 = !tab1">Datos del registro</h3>
				<div class="category-content blur" ng-show="tab1">
					<table class="table">
						<tr>
							<td>Formato</td>
							<td>
								{{Form::text('formato',null,['class'=>'w100'])}}
							</td>
							<td>
								Director de proyecto
								<span class="icon icon-popout pointer" ng-click="director = !director"></span>
							</td>
							<td>
								{{Form::select('director_id',[],null,['class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Fecha de elaboracion</td>
							<td>
								{{Form::input('date','fecha_elaboracion',null,['class'=>'w100'])}}
							</td>
							<td>
								Elaboro
								<span class="icon icon-popout pointer" ng-click="elaboro = !elaboro"></span>
							</td>
							<td>
								{{Form::select('encuestador_id',[],null,['class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Ciudad</td>
							<td>
								{{Form::text('ciudad_id',null,['class'=>'w100'])}}
							</td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="category">
				<h3 class="category-title" ng-click="tab2 = !tab2">Datos generales de la construcción</h3>
				<div class="category-content blur" ng-show="tab2">
					<table class="table">
						<tr>
							<td>Domicilio</td>
							<td colspan="3">
								{{Form::textarea('domicilio',null,['cols'=>"50",'rows'=>"3",'class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Número de habitantes</td>
							<td>
								{{Form::text('habitantes',null,['class'=>'w100'])}}
							</td>
							<td>Código postal</td>
							<td>
								{{Form::text('codigo_postal',null,['class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Tipo de muebles</td>
							<td>
								{{Form::select('',[],null,['class'=>'w100'])}}
							</td>
							<td>Tipo de acabados</td>
							<td>
								{{Form::select('',[],null,['class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Zona de hubicaión</td>
							<td>
								{{Form::select('',[],null,['class'=>'w100'])}}
							</td>
							<td>
								Datos G.P.S.
								<span class="icon icon-home pointer" ng-click="map = !map"></span>
							</td>
							<td>
								{{Form::text('',null,['class'=>'w100','ng-model'=>'coordinates'])}}
							</td>
						</tr>
						<tr>
							<td>Posición en la manzana</td>
							<td>
								{{Form::select('',[],null,['class'=>'w100'])}}
							</td>
						</tr>
					</table>
					<div class="map blur block-center" id="map" ng-hide="map" ng-init="initmaps()" ng-click="setcoordinates()">
					</div>

					<table class="table">
						<tr>
							<td colspan="4" class="title" align="center"><strong>Juntas en centímetros (cm)</strong></td>
						</tr>
						<tr>
							<td>Izquierda</td>
							<td>
								{{Form::text('',null,['class'=>'w50'])}}
							</td>
							<td>Derecha</td>
							<td>
								{{Form::text('',null,['class'=>'w50'])}}
							</td>
						</tr>
					</table>
					<table class="table">
						<tr>
							<td colspan="4" class="title" align="center"><strong>Altura de construcción en metros (m)</strong></td>
						</tr>
						<tr>
							<td width="150">Izquierda</td>
							<td>
								{{Form::text('',null,['class'=>'w50'])}}
							</td>
							<td width="130">Derecha</td>
							<td>
								{{Form::text('',null,['class'=>'w50'])}}
							</td>
						</tr>
						<tr>
							<td>Edad aproximada de la construción en años</td>
							<td>
								{{Form::text('',null,['class'=>'w100'])}}
							</td>
							<td>Números de niveles sobre el terreno</td>
							<td>
								{{Form::text('',null,['class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Altura promedio de entrepisos en metros (m)</td>
							<td>
								{{Form::text('',null,['class'=>'w100'])}}
							</td>
							<td>Uso principal</td>
							<td>
								{{Form::select('',[],null,['class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Tipo de contrución</td>
							<td>
								{{Form::select('',[],null,['class'=>'w100'])}}
								<span class="error"></span>
							</td>
						</tr>
						<tr>
							<td>Fotografía de la construcción</td>
							<td colspan="3">
								{{Form::file('')}}
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="category">
				<h3 class="category-title" ng-click="tab3 = !tab3">Características de la construcción</h3>
				<div class="category-content blur" ng-show="tab3">
					<table class="table">
						<tr>
							<td colspan="2" class="title">Caracteristicas estructurales de los muros</td>
						</tr>
						<tr>
							<td>Espesor de muros en centímetros (cm)</td>
							<td>
								{{Form::text('',null,['class'=>'w50'])}}
							</td>
						</tr>
						<tr>
							<td>¿Tiene repello?</td>
							<td>
								{{Form::select('',[
									'Si'=>'Si',
									'No'=>'No',
									'No se sabe'=>'No se sabe'
								],null,['class'=>'w50'])}}
								<span class="error"></span>
							</td>
						</tr>
						<tr>
							<td>¿Tiene columnas aisladas o castillos?</td>
							<td>
								{{Form::select('',[
									'Si'=>'Si',
									'No'=>'No',
									'No se sabe'=>'No se sabe'
								],null,['class'=>'w50'])}}
							</td>
						</tr>
						<tr>
							<td>Material de los muros</td>
							<td>
								{{Form::select('',[],null,['class'=>'w50'])}}
							</td>
						</tr>
						<tr>
							<td>Densidad de los muros</td>
							<td>
								{{Form::select('',[],null,['class'=>'w50'])}}
							</td>
						</tr>
					</table>
					<table class="table">
						<tr>
							<td colspan="2" class="title">Características de la cimentación</td>
						</tr>
						<tr>
							<td>Tipo de suelo</td>
							<td>
								{{Form::select('',[],null,['class'=>'w50'])}}
							</td>
						</tr>
						<tr>
							<td>Tipo de cimentación</td>
							<td>
								{{Form::select('',[],null,['class'=>'w50'])}}
							</td>
						</tr>
					</table>
					<table class="table">
						<tr>
							<td colspan="4" class="title">Sistema de cubiertas</td>
						</tr>
						<tr>
							<td colspan="2"a align="center"><strong>Techo</strong></td>
							<td colspan="2"a align="center"><strong>Piso</strong></td>
						</tr>
						<tr>
							<td width="25%">Espesor de losa de techo en centimetros (cm)</td>
							<td width="25%">
								{{Form::text('',null,['class'=>'w100'])}}
							</td>
							<td width="25%">Tipo de suelo</td>
							<td width="25%">
								{{Form::select('',[],null,['class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Tipo de piso</td>
							<td>
								{{Form::select('',[],null,['class'=>'w100'])}}
							</td>
							<td>Pendiente (inclinacion)</td>
							<td>
								{{Form::select('',[
									'<5%'=>'<5%',
									'<3%'=>'<3%'
								],null,['class'=>'w100'])}}
							</td>
						</tr>
					</table>
					<table class="table">
						<tr>
							<td colspan="4" class="title">Geometría de la edificación</td>
						</tr>
						<tr>
							<td colspan="2" align="center"><strong>Dimensiones</strong></td>
							<td colspan="2" align="center"><strong>Regularidad</strong></td>
						</tr>
						<tr>
							<td width="25%">Largo</td>
							<td width="25%">
								{{Form::text('',null,['class'=>'w100'])}}
							</td>
							<td width="25%">Regularidad en plata</td>
							<td width="25%">
								{{Form::select('',[],null,['class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Ancho</td>
							<td>
								{{Form::text('',null,['class'=>'w100'])}}
							</td>
							<td>Regularidad vertical</td>
							<td>
								{{Form::select('',[],null,['class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Alto</td>
							<td>
								{{Form::text('',null,['class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Área aproximada construida (m2)</td>
							<td>
								{{Form::text('',null,['class'=>'w100'])}}
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="category">
				<h3 class="category-title" ng-click="tab4 = !tab4">Antecedentes históricos de la construcción</h3>
				<div class="category-content blur" ng-show="tab4">
					<table class="table">
						<tr>
							<td width="20%">¿Cambios en el sistema constructivo?</td>
							<td width="25%">
								{{Form::select('',[
									'Si'=>'Si',
									'No'=>'No',
									'No se sabe'=>'No se sabe'
								],null,['class'=>'w50'])}}
							</td>
							<td>Descripción</td>
							<td>
								{{Form::textarea('',null,['cols'=>"30",'rows'=>"3",'class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>¿Daños?</td>
							<td>
								{{Form::select('',[
									'Si'=>'Si',
									'No'=>'No',
									'No se sabe'=>'No se sabe'
								],null,['class'=>'w50'])}}
							</td>
							<td>Descripción del daño</td>
							<td>
								{{Form::textarea('',null,['cols'=>"30",'rows'=>"3",'class'=>'w100'])}}
							</td>
						</tr>
						<tr>
							<td>Mantenimiento</td>
							<td>
								{{Form::select('',[],null,['class'=>'w50'])}}
							</td>
							<td>
								Tipo de fenomeno
							</td>
							<td>
								{{Form::select('',[],null,['class'=>'w50'])}}
							</td>
						</tr>
						<tr>
							<td>Reparaciones previas?</td>
							<td>
								{{Form::select('',[
									'Si'=>'Si',
									'No'=>'No',
									'No se sabe'=>'No se sabe'
								],null,['class'=>'w50'])}}
							</td>
							<td>¿Remodelaciones?</td>
							<td>
								{{Form::select('',[
									'Si'=>'Si',
									'No'=>'No',
									'No se sabe'=>'No se sabe'
								],null,['class'=>'w50'])}}
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-blue"> Agregar nuevo registro</button>
			</div>
		</article>
		{{Form::close()}}
	</section>
@stop