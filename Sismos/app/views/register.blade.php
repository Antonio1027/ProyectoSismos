@extends('layout')

@section('title')
	Registro
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
						<li class="list-item"><span class="icon icon-add"></span> Nuevo</li>
						<li class="list-item"><span class="icon icon-minus"></span> Borrar</li>
						<li class="list-item"><span class="icon icon-pen"></span> Modificar</li>
						<li class="list-item"><span class="icon icon-magnifier"></span> Buscar</li>
					</ul>
				</div>
			</div>

			<div class="banner-left-section text-center">
				<div class="box banner-left-box">
					<span class="icon-popout"></span>
				</div>
				<div class="banner-left-content banner-left-option">
					<div class="margin-bottom">
						<span>Agregar nuevo director de proyecto</span>
						<input type="text" class="w100">
						<button type="submit">Agregar</button>
					</div>
					<div class="margin-bottom">
						<span>Agregar nuevo encuestador</span>
						<input type="text" class="w100">
						<button type="submit">Agregar</button>
					</div>
				</div>
			</div>
		</article>

		<article class="banner-right">			
			<div class="category">
				<h3 class="category-title" ng-click="tab1 = !tab1">Datos del registro</h3>
				<div class="category-content" ng-show="tab1">
					<table class="table">
						<tr>
							<td>Formato</td>
							<td>
								<input type="text" class="input50">
							</td>
							<td>Director de proyecto</td>
							<td>
								<input type="text" class="w100">
							</td>
						</tr>
						<tr>
							<td>Fecha de alaboracion</td>
							<td>
								<input type="date" class="w100">
							</td>
							<td>Elaboro</td>
							<td>
								<select name="" id="" class="w100"></select>
							</td>
						</tr>
						<tr>
							<td>Ciudad</td>
							<td>
								<input type="text" class="w100">
							</td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="category">
				<h3 class="category-title" ng-click="tab2 = !tab2">Datos generales de la construcción</h3>
				<div class="category-content" ng-show="tab2">
					<table class="table">
						<tr>
							<td>Domicilio</td>
							<td colspan="3">
								<textarea name="" id="" cols="30" rows="3"></textarea>
							</td>
						</tr>
						<tr>
							<td>Número de habitantes</td>
							<td>
								<input type="text">
							</td>
							<td>Código postal</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Tipo de muebles</td>
							<td>
								<input type="text">
							</td>
							<td>Tipo de acabados</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Zona de hubicaión</td>
							<td>
								<input type="text">
							</td>
							<td>Datos G.P.S.</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Posición en la manzana</td>
							<td>
								<input type="text">
							</td>
						</tr>
					</table>
					<table class="table">
						<tr>
							<td colspan="4" class="title" align="center"><strong>Juntas en centímetros (cm)</strong></td>
						</tr>
						<tr>
							<td>Izquierda</td>
							<td>
								<input type="text">
							</td>
							<td>Derecha</td>
							<td>
								<input type="text">
							</td>
						</tr>
					</table>
					<table class="table">
						<tr>
							<td colspan="4" class="title" align="center"><strong>Altura de construcción en metros (m)</strong></td>
						</tr>
						<tr>
							<td width="30%">Izquierda</td>
							<td width="20%">
								<input type="text">
							</td>
							<td width="30%">Derecha</td>
							<td width="20%">
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Edad aproximada de la construción en años</td>
							<td>
								<input type="text">
							</td>
							<td>Números de niveles sobre el terreno</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Altura promedio de entrepisos en metros (m)</td>
							<td>
								<input type="text">
							</td>
							<td>Uso principal</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Tipo de contrución</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Fotografía de la construcción</td>
							<td colspan="3">
								<input type="file">
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="category">
				<h3 class="category-title" ng-click="tab3 = !tab3">Características de la construcción</h3>
				<div class="category-content" ng-show="tab3">
					<table class="table">
						<tr>
							<td colspan="2" class="title">Caracteristicas estructurales de los muros</td>
						</tr>
						<tr>
							<td>Espesor de muros en centímetros (cm)</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>¿Tiene repello?</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>¿Tiene columnas aisladas o castillos?</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Material de los muros</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Densidad de los muros</td>
							<td>
								<input type="text">
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
								<select name="" id=""></select>
							</td>
						</tr>
						<tr>
							<td>Tipo de cimentación</td>
							<td>
								<select name="" id=""></select>
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
							<td>Espesor de losa de techo en centimetros (cm)</td>
							<td>
								<input type="text">
							</td>
							<td>Tipo de suelo</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Tipo de techo</td>
							<td>
								<input type="text">
							</td>
							<td>Pendiente (inclinacion)</td>
							<td>
								<input type="text">
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
							<td>Largo</td>
							<td>
								<input type="text">
							</td>
							<td>Regularidad en plata</td>
							<td>
								<select name="" id=""></select>
							</td>
						</tr>
						<tr>
							<td>Ancho</td>
							<td>
								<input type="text">
							</td>
							<td>Regularidad vertical</td>
							<td>
								<select name="" id=""></select>
							</td>
						</tr>
						<tr>
							<td>Alto</td>
							<td>
								<input type="text">
							</td>
						</tr>
						<tr>
							<td>Área aproximada construida (m2)</td>
							<td>
								<input type="text">
							</td>
						</tr>
					</table>
				</div>	
			</div>
			<div class="category">
				<h3 class="category-title" ng-click="tab4 = !tab4">Antecedentes históricos de la construcción</h3>
				<div class="category-content" ng-show="tab4">
					<table class="table">
						<tr>
							<td>¿Cambios en el sistema constructivo?</td>
							<td>
								<input type="text">
							</td>
							<td>Descripción</td>
							<td>
								<textarea name="" id="" cols="30" rows="3"></textarea>
							</td>
						</tr>
						<tr>
							<td>¿Daños?</td>
							<td>
								<select name="" id=""></select>
							</td>
							<td>Descripción del daño</td>
							<td>
								<textarea name="" id="" cols="30" rows="3"></textarea>
							</td>
						</tr>
						<tr>
							<td>Mantenimiento</td>
							<td>
								<select name="" id=""></select>
							</td>
							<td>
								Tipo de fenomeno
							</td>
							<td>
								<select name="" id=""></select>
							</td>
						</tr>						
						<tr>
							<td>Reparaciones previas?</td>
							<td>
								<select name="" id=""></select>
							</td>
							<td>¿Remodelaciones?</td>
							<td>
								<select name="" id=""></select>
							</td>
						</tr>
					</table>
				</div>	
			</div>
		</article>
	</section>
@stop