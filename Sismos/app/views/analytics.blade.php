@extends('layout')

@section('title')
	Registro
@stop

@section('script')
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBpCHGsuh7cVRGRyn-ECXWybh7hq2lP_hc&sensor=true"></script>
@stop

@section('content')
	<section ng-controller="AnalitycsCtrl">

		<div class="box">
			<h1>Analisis de vulnerabilidad por el método de la UAM</h1>
		</div>
		<!-- Form -->
		<div class="content margin-bottom">
			{{ Form::open(['route' => 'analytics', 'method' => 'post']) }}
				<div>
					<h3>Zona de estudio</h3>				
					<select name="zonas" id="" ng-model="zona" ng-init="searchrecords()" ng-change="searchrecords()" required>
						<option value="">Todas las zonas</option>
						<option value="1: Norte-Oriente">Zona 1: Norte - Oriente</option>
						<option value="2: Norte-Poniente">Zona 2: Norte - Poniente</option>
						<option value="3: Centro'=>'Zona">Zona 3: Oriente</option>
						<option value="4: Sur-Oriente">Zona 4: Sur - Oriente</option>
						<option value="5: Sur-Poniente">Zona 5: Sur - Poniente</option>
					</select>
				</div>
				<div>
					<h3>Fuentes de peligro</h3>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="1" id="first-source" required>
					<label for="first-source">No es sentido, excepto por algunas personas bajo circunstancias especialmente favorables.</label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="2" id="second-source">
					<label for="second-source">Sentido sólo por muy pocas gente en posición de descanso, especialmente en los pisos altos de los edificios. Objetos delicadamente suspendidos pueden oscilar. </label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="3" id="third-source">
					<label for="third-source">Sentido muy claramente en interiores, especialmente en pisos altos de edificios, aunque mucha gente no lo reconoce como un terremoto. Automóviles parados pueden balancearse ligeramente. Vibraciones como el paso de un camión. Duración apreciable. </label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="4" id="fourth-source">
					<label for="fourth-source">Durante el día sentido en interiores por muchos, al aire libre por algunos. Por las noches algunas despiertan, platos, ventanas y puertas agitados, las paredes crujen. Sensación como si un camión pesado chocara contra un edificio. Automóvil parados se balancean apreciablemente.</label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="5" id="fifth-source">
					<label for="fifth-source">Sentido por casi todos, muchos se despiertan. Algunos platos, ventanas y similares rotos; grietas en el revestimiento en algunos sitios. Objetos inestables volcados. Algunas veces se aprecian balanceo de árboles, postes y otros objetos altos. Los péndulos de los relojes pueden pararse.</label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="6" id="sixth-source">
					<label for="sixth-source">Sentido por todos, muchos se asistan y salen al exterior. Algunos muebles pesados se mueven; algunos casos de caída de revestimiento  chimeneas dañadas. Daño leve.</label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="7" id="seventh-source">
					<label for="seventh-source">Todo el mundo sale al exterior. Daño insignificante e edificios de buen diseño y construcción; leve a modelado en estructuras comunes bien construidas; Considerable en estructuras pobremente construidas o mal diseñadas; se rompe algunas chimeneas. Notado por algunas personas que conducen automóviles.</label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="8" id="eighth-source">
					<label for="eighth-source">Daño leve en estructuras diseñadas especialmente para resistir sismos; considerable, en edificios comunes bien construidos, llegando hasta colapso parcial o grande en estructuras de construcción pobre. Los muros de relleno se separan de la estructura. Caída de chimeneas, objetos apilados, postes, monumentos y paredes. Muebles pesados volcados. Expulsión de arena y barro en pequeñas cantidades. Cambios en pozos de agua. Ciertas dificultad para conducir automóviles.</label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="9" id="ninth-source">
					<label for="ninth-source">Daño considerable en estructuras de diseño especial; estructuras bien diseñadas pierden la vertical; daño mayor en edificios sólidos, colapso parcial. Edificios desplazados de los cimientos. Grietas visibles en el suelo. Tuberías subterráneas rotas.</label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="10" id="tenth-source">
					<label for="tenth-source">Algunas estructuras bien construidas en madera, destruidas; la mayoría de estructuras mampostería y marcos destruidas incluyendo sus cimientos; suelo muy agrietado. Rieles torcidos. Corrimiento de tierra considerable en las orillas de los ríos y en laderas escarpadas. Movimientos de arena y barro. Agua salpicada y derramada sobre las orillas.</label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="11" id="eleventh-source">
					<label for="eleventh-source">Pocas o ninguna obra de albañilería quedan en pie. Puentes destruidos. Grietas anchas en el suelo. Tuberías subterráneas completamente fuera de servicio. La tierra se hunde y el suelo se desliza en terreno blandos. Rieles muy torcidos.</label>
					<hr>
					<input type="radio" name="fuentes" ng-model="fuente" ng-change="getAnalyticsTable()" value="12" id="twelfth-source">
					<label for="twelfth-source">Destrucción total. Se ven ondas sobre la superficie del suelo. Líneas de mira (visuales) y de nivel deformadas. Objetos lanzados al aire.</label>
				</div>
				<br>
				<button type="submit" class="btn btn-blue"> Realizar análisis</button>
			{{Form::close()}}
		</div>

		<!-- Mapa -->
		<div class="category">
			<h3 class="category-title">Mapa</h3>
			<div class="category-content">
				<div class="map blur block-center" id="map" ng-init="initmaps()" ></div>
			</div>
		</div>

		<!-- Table 1 -->
		<div class="category">
			<h3 class="category-title">Caracteristicas de las estructuras</h3>
			<div class="category-content">
				<table class="table table-cell">
					<tr>
						<td>Tipo de estructura</td>
						<td align="center">Con daños</td>
						<td align="center">Sin daños</td>
						<td align="center">Mejorado</td>
						<td align="center">Totales</td>
					</tr>					

					<tr ng-repeat="element in data.table1">
						<td>@{{element.id}}</td>						
						<td align="center">@{{element.condanos}}</td>						
						<td align="center">@{{element.sindanos}}</td>						
						<td align="center">@{{element.mejorado}}</td>						
						<td align="center">@{{element.total}}</td>						
					</tr>
					<tr>
						<td><strong>Totales</strong></td>
						<td align="center"><strong>@{{data.table1totales.totalcondanos}}</strong></td>
						<td align="center"><strong>@{{data.table1totales.totalsindanos}}</strong></td>
						<td align="center"><strong>@{{data.table1totales.totalmejorados}}</strong></td>
						<td align="center"><strong>@{{data.table1totales.totales}}</strong></td>
					</tr>
				</table>
			</div>
		</div>		
	
		<!-- Table 2 -->
		<div class="category">
			<h3 class="category-title">Número de estructuras en la zona de estudio y clase asignada</h3>
			<div class="category-content">
				<table class="table table-cell">
					<tr>
						<td>Tipo de estructura</td>
						<td align="center">Cantidad</td>
						<td align="center">Clase asignada</td>
					</tr>
					<tr ng-repeat="element in data.table2">
						<td>@{{element.estructura}}</td>
						<td align="center">@{{element.total}}</td>
						<td align="center">@{{element.tipo}}</td>
					</tr>					
					<tr>
						<td><strong>Estructuras analizadas</strong></td>
						<td align="center"><strong>@{{data.table2totales.total}}</strong></td>
					</tr>		
				</table>
			</div>
		</div>

		<!-- Table 3 -->		
		<div class="category" ng-show="data.table3">
			<h3 class="category-title">Número de estructuras en la zona y clase asignada </h3>
			<div class="category-content">
				<table class="table table-cell">
					<tr>
						<td>Tipo de estructura</td>
						<td align="center">Cantidad</td>
						<td align="center">Clase asignada</td>
						<td align="center">Daño 1</td>
						<td align="center">Daño 2</td>
						<td align="center">Daño 3</td>
						<td align="center">Daño 4</td>
						<td align="center">Daño 5</td>
					</tr>
					<tr ng-repeat="element in data.table3">
						<td>@{{element.estructura}}</td>
						<td align="center">@{{element.total}}</td>
						<td align="center">@{{element.tipo}}</td>
						<td align="center">@{{element.dano1}}</td>
						<td align="center">@{{element.dano2}}</td>
						<td align="center">@{{element.dano3}}</td>
						<td align="center">@{{element.dano4}}</td>
						<td align="center">@{{element.dano5}}</td>
					</tr>
				</table>
			</div>
		</div>
		<!-- <div class="category">
			<h3 class="category-title">Conteo de vulnerabilidades </h3>
			<div class="category-content">
				<table class="table table-cell w25">
					<tr>
						<td>Tipo A</td>
						<td>244</td>
					</tr>
					<tr>
						<td>Tipo B</td>
						<td>139</td>
					</tr>
					<tr>
						<td>Tipo C</td>
						<td></td>
					</tr>
					<tr>
						<td>Tipo D</td>
						<td></td>
					</tr>
					<tr>
						<td>Tipo E</td>
						<td></td>
					</tr>
					<tr>
						<td>Tipo F</td>
						<td></td>
					</tr>

				</table>
			</div>
		</div> -->
	</section>
@stop