@extends('layout')

@section('title')
	Registro
@stop

@section('content')
	<section>
		<div class="box">
			<h1>Analisis de vulnerabilidad por el método de la UAM</h1>
		</div>
		<div class="content margin-bottom">
			<div>
				<h3>Zona de estudio</h3>
				<select name="" id="">
					<option value="">Seleccione una opcion</option>
					<option value="">Todas las zonas</option>
					<option value="">Zona 1: Norte - Oriente</option>
					<option value="">Zona 2: Norte - Poniente</option>
					<option value="">Zona 4: Oriente</option>
					<option value="">Zona 5: Sur - Oriente</option>
					<option value="">Zona 6: Sur - Poniente</option>
				</select>
			</div>
			<div>
				<h3>Fuentes de peligro</h3>
				<input type="radio" id="first-source">
				<label for="first-source">No es sentido, excepto por algunas personas bajo circunstancias especialmente favorables.</label>
				<hr>
				<input type="radio" id="second-source">
				<label for="second-source">Sentido sólo por muy pocas gente en posición de descanso, especialmente en los pisos altos de los edificios. Objetos delicadamente suspendidos pueden oscilar. </label>
				<hr>
				<input type="radio" id="third-source">
				<label for="third-source">Sentido muy claramente en interiores, especialmente en pisos altos de edificios, aunque mucha gente no lo reconoce como un terremoto. Automóviles parados pueden balancearse ligeramente. Vibraciones como el paso de un camión. Duración apreciable. </label>
				<hr>
				<input type="radio" id="fourth-source">
				<label for="fourth-source">Durante el día sentido en interiores por muchos, al aire libre por algunos. Por las noches algunas despiertan, platos, ventanas y puertas agitados, las paredes crujen. Sensación como si un camión pesado chocara contra un edificio. Automóvil parados se balancean apreciablemente.</label>
				<hr>
				<input type="radio" id="fifth-source">
				<label for="fifth-source">Sentido por casi todos, muchos se despiertan. Algunos platos, ventanas y similares rotos; grietas en el revestimiento en algunos sitios. Objetos inestables volcados. Algunas veces se aprecian balanceo de árboles, postes y otros objetos altos. Los péndulos de los relojes pueden pararse.</label>
				<hr>
				<input type="radio" id="sixth-source">
				<label for="sixth-source">Sentido por todos, muchos se asistan y salen al exterior. Algunos muebles pesados se mueven; algunos casos de caída de revestimiento  chimeneas dañadas. Daño leve.</label>
				<hr>
				<input type="radio" id="seventh-source">
				<label for="seventh-source">Todo el mundo sale al exterior. Daño insignificante e edificios de buen diseño y construcción; leve a modelado en estructuras comunes bien construidas; Considerable en estructuras pobremente construidas o mal diseñadas; se rompe algunas chimeneas. Notado por algunas personas que conducen automóviles.</label>
				<hr>
				<input type="radio" id="eighth-source">
				<label for="eighth-source">Daño leve en estructuras diseñadas especialmente para resistir sismos; considerable, en edificios comunes bien construidos, llegando hasta colapso parcial o grande en estructuras de construcción pobre. Los muros de relleno se separan de la estructura. Caída de chimeneas, objetos apilados, postes, monumentos y paredes. Muebles pesados volcados. Expulsión de arena y barro en pequeñas cantidades. Cambios en pozos de agua. Ciertas dificultad para conducir automóviles.</label>
				<hr>
				<input type="radio" id="ninth-source">
				<label for="ninth-source">Daño considerable en estructuras de diseño especial; estructuras bien diseñadas pierden la vertical; daño mayor en edificios sólidos, colapso parcial. Edificios desplazados de los cimientos. Grietas visibles en el suelo. Tuberías subterráneas rotas.</label>
				<hr>
				<input type="radio" id="tenth-source">
				<label for="tenth-source">Algunas estructuras bien construidas en madera, destruidas; la mayoría de estructuras mampostería y marcos destruidas incluyendo sus cimientos; suelo muy agrietado. Rieles torcidos. Corrimiento de tierra considerable en las orillas de los ríos y en laderas escarpadas. Movimientos de arena y barro. Agua salpicada y derramada sobre las orillas.</label>
				<hr>
				<input type="radio" id="eleventh-source">
				<label for="eleventh-source">Pocas o ninguna obra de albañilería quedan en pie. Puentes destruidos. Grietas anchas en el suelo. Tuberías subterráneas completamente fuera de servicio. La tierra se hunde y el suelo se desliza en terreno blandos. Rieles muy torcidos.</label>
				<hr>
				<input type="radio" id="twelfth-source">
				<label for="twelfth-source">Destrucción total. Se ven ondas sobre la superficie del suelo. Líneas de mira (visuales) y de nivel deformadas. Objetos lanzados al aire.</label>
			</div>			
		</div>

		<div class="category">
			<h3 class="category-title">Caracteristicas de las estructuras</h3>
			<div class="category-content">
				<table class="table table-cell">
					<tr>
						<td>Tipo de estructura</td>
						<td>Con daños</td>
						<td>Sin daños</td>
						<td>Totales</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Acero</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - Lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - Lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - Teja</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - Losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - Lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - Lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - Teja</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - Losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - teja</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Concreto - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Diversas</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - madera</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - teja</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - madera</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - teja</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Panel de yeso - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Piedra - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><strong>Totales</strong></td>
						<td><strong>904</strong></td>
						<td><strong>1196</strong></td>
						<td><strong>2100</strong></td>
					</tr>
				</table>
			</div>
		</div>

		<div class="category">
			<h3 class="category-title">Número de estructuras en la zona de estudio y clase asignada</h3>
			<div class="category-content">
				<table class="table table-cell">
					<tr>
						<td>Tipo de estructura</td>
						<td>Cantidad</td>
						<td>Clase asignada</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - lámina de acero</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - lámina de asbesto</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - teja</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - losa maciza</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - lámina de acero</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - lámina de asbesto</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - teja</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - teja</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Diversas</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - teja</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - losa maciza</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - lámina de acero</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - teja</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Panel de yeso - losa maciza</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Piedra - lámina de acero</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - lámina de asbesto</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - lámina de acero</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - lámina de asbesto</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - lámina de acero</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - lámina de asbesto</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - madera</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - lámina de acero</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - madera</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - losa maciza</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - teja</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - losa maciza</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - teja</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - losa maciza</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - lámina de acero</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - lámina de asbesto</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Concreto - losa maciza</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - losa maciza</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - lámina de acero</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - lámina de asbesto</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Acero</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td><strong>Estructuras analizadas</strong></td>
						<td><strong>2100</strong></td>
					</tr>

				</table>
			</div>
		</div>

		<div class="category">
			<h3 class="category-title">Número de estructuras en la zona y clase asignada </h3>
			<div class="category-content">
				<table class="table table-cell">
					<tr>
						<td>Tipo de estructura</td>
						<td>Cantidad</td>
						<td>Clase asignada</td>
						<td>Daño 1</td>
						<td>Daño 2</td>
						<td>Daño 3</td>
						<td>Daño 4</td>
						<td>Daño 5</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - teja</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Bajareque - teja</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - teja</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Diversas</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - teja</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - teja</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Panel de yeso - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Piedra - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Adobe - lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - madera</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Madera - madera</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - teja</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - teja</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Block - lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Concreto - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - losa maciza</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - lámina de acero</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Ladrillo - lámina de asbesto</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td>Acero</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>

				</table>
			</div>
		</div>

		<div class="category">
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
		</div>
	</section>
@stop