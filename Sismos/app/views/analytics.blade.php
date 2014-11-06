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
				<label for="first-source">Primera fuente de sismogénica subducción 23/Sep/1902 M=7.7 Acel=0.7g Grado de daño=X Tuxtla y Tapachula</label>
				<br>
				<input type="radio" id="second-source">
				<label for="second-source">Segunda fuente de sismos profundos 21/Oct/1995 M=7.2 Acel=0.6g Grado de daño=IX Tuxtla y Tapachula</label>
				<br>
				<input type="radio" id="third-source">
				<label for="third-source">Tercera fuente sismos corticales Jul-Oct/1975 M=5.5 Acel=0.2g Grado de daño=VII Tuxtla </label>
				<br>
				<input type="radio" id="fourth-source">
				<label for="fourth-source">Cuarta fuente volcán M=5.5 Acel=0.2g Grado de daño=VII Tapachula </label>
				<br>
				<input type="radio" id="fifth-source">
				<label for="fifth-source">Quinta fuente falla lateral 18/Abr/1902 M=7.0 Acel=9.4g Grado de daño=VIII Tapachula </label>
				<br>
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