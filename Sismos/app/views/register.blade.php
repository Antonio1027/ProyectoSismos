@extends('layout')

@section('title')
	Registro
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
						<li class="list-item"><a href="{{route('register')}}"><span class="icon icon-add"></span> Nuevo</a></li>
						{{--<li class="list-item"><span class="icon icon-minus"></span> Borrar</li>--}}
						{{--<li class="list-item"><span class="icon icon-pen"></span> Modificar</li>--}}
						<li class="list-item"><a href="{{route('consultrecords')}}"><span class="icon icon-magnifier"></span> Buscar</a></li>
					</ul>
				</div>
			</div>

				
		</article>

		<article class="banner-right">
			{{ Form::open(['route' => 'register', 'method' => 'post', 'name' => 'formRegister', 'enctype'=>'multipart/form-data']) }}

			<div class="category" ng-init="tab1 = true" ng-class="{invalid: 
								!formRegister.formato.$valid || 
								!formRegister.director_id.$valid || 
								!formRegister.fecha_elaboracion.$valid}">								
				<h3 class="category-title" ng-click="tab1 = !tab1">Datos del registro</h3>
				<div class="category-content blur" ng-show="tab1">
					<table class="table">
						<tr>
							<td>Formato</td>
							<td>
								{{Form::text('formato',null,['class'=>'w100','ng-model'=>'formato', 'required'])}}
							</td>
							<td>
								Director de proyecto
							</td>
							<td>
								 {{Form::select('director_id',$directores,null,['class'=>'w100','ng-model'=>'director_id', 'required'])}}
							</td>
						</tr>
						<tr>
							<td>Fecha de elaboracion</td>
							<td>
								{{Form::input('date','fecha_elaboracion',null,['class'=>'w100','ng-model'=>'fecha_elaboracion', 'required'])}}
							</td>
							<td>
								Elaboro
							</td>
							<td>								
								{{Form::label(Auth::user()->username)}}
							</td>
						</tr>
						<tr>
							<td>Ciudad</td>
							<td>
								{{Form::text('ciudad',null,['class'=>'w100','ng-model'=>'ciudad', 'required'])}}
							</td>
							<td></td>
							<td></td>
						</tr>
					</table>
				</div>
			</div>

			<div class="category" ng-init="tab2 = true" ng-class="{invalid: validtab2}">
				<h3 class="category-title" ng-click="tab2 = !tab2">Datos generales de la construcción</h3>
				<div class="category-content blur" ng-show="tab2">
					<table class="table">
						<tr>
							<td>Domicilio</td>
							<td colspan="3">
								{{Form::textarea('domicilio',null,['cols'=>"50",'rows'=>"3",'class'=>'w100','ng-model'=>'domicilio'])}}
							</td>
						</tr>
						<tr>
							<td>Número de habitantes</td>
							<td>
								 {{Form::text('habitantes',null,['class'=>'w100','ng-model'=>'habitantes'])}}
							</td>
							<td>Código postal</td>
							<td>
								{{Form::input('number','codigo_postal',null,['class'=>'w100','ng-model'=>'codigo_postal'])}}
							</td>
						</tr>
						<tr>
							<td>Tipo de muebles</td>
							<td>
								{{Form::select('inmueble',
						                        [''=>'Seleccione opción',
						                        'Bajo'=>'Bajo',
						                        'Económico'=>'Económico',
						                        'Elevado'=>'Elevado',
						                        'Intermedio'=>'Intermedio',
						                        'Lujo'=>'Lujo']
						                        ,null,
						                        ['class'=>'w100','ng-model'=>'inmueble'])}}
							</td>
							<td>Tipo de acabados</td>
							<td>
								 {{Form::select('acabado',
						                        [''=>'Seleccione opción',
						                        'Bajo'=>'Bajo',
						                        'Económico'=>'Económico',
						                        'Elevado'=>'Elevado',
						                        'Intermedio'=>'Intermedio',
						                        'Lujo'=>'Lujo'],
						                         null,
						                         ['class'=>'w100','ng-model'=>'acabado'])}}
							</td>
						</tr>
						<tr>
							<td>Zona de hubicaión</td>
							<td>
								 {{Form::select('zona',
						                        [''=>'Seleccione opción',
						                        '1: Norte-Oriente'=>'Zona 1: Norte-Oriente',
						                         '2: Norte-Poniente'=>'Zona 2: Norte-Poniente',
						                         '3: Centro'=>'Zona 3: Centro',
						                         '4: Sur-Oriente'=>'Zona 4: Sur-Oriente',
						                         '5: Sur-Poniente'=>'Zona 5: Sur-Poniente'
						                        ],
						                        null,
						                        ['class'=>'w100','ng-model'=>'zona'])}}
							</td>
							<td>
								Datos G.P.S.
								<span class="icon icon-map pointer" ng-click="map = !map"></span>
							</td>
							<td>
								{{Form::text('datos_gps',null,['class'=>'w100','ng-model'=>'datos_gps'])}}
							</td>
						</tr>
						<tr>
							<td>Posición en la manzana</td>
							<td>
								{{Form::select('posicion',
						                        [''=>'Seleccione opción',
						                        'Esquina'=>'Esquina',
						                        'Esquina libre a un lado'=>'Esquina libre a un lado',
						                        'Esquina y libre ambos lados'=>'Esquina y libre ambos lados',
						                        'Intermedia'=>'Intermedia',
						                        'Intermedia y libre de un lado'=>'Intermedia y libre de un lado',
						                        'Libre'=>'Libre'],
						                        null,
						                        ['class'=>'w100','ng-model'=>'posicion'])}}
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
								{{Form::text('jun_izq',null,['class'=>'w50','ng-model'=>'jun_izq'])}}
							</td>
							<td>Derecha</td>
							<td>
								{{Form::text('jun_der',null,['class'=>'w50','ng-model'=>'jun_der'])}}
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
								{{Form::text('alt_izq',null,['class'=>'w50','ng-model'=>'alt_izq'])}}
							</td>
							<td width="130">Derecha</td>
							<td>
								{{Form::text('alt_der',null,['class'=>'w50','ng-model'=>'alt_der'])}}
							</td>
						</tr>
						<tr>
							<td>Edad aproximada de la construción en años</td>
							<td>
								{{Form::text('edad',null,['class'=>'w100','ng-model'=>'edad'])}}
							</td>
							<td>Números de niveles sobre el terreno</td>
							<td>
								{{Form::text('niveles',null,['class'=>'w100','ng-model'=>'niveles'])}}
							</td>
						</tr>
						<tr>
							<td>Altura promedio de entrepisos en metros (m)</td>
							<td>
								{{Form::text('alt_entrepisos',null,['class'=>'w100','ng-model'=>'alt_entrepisos'])}}
							</td>
							<td>Uso principal</td>
							<td>
								{{Form::select('uso',
						                        [''=>'Seleccione opción',
						                        'Bodegas'=>'Bodegas','Comercial'=>'Comercial',
						                        'Educacional'=>'Educacional','En construcción'=>'En construcción',
						                        'Gobierno'=>'Gobierno','Habitacional'=>'Habitacional',
						                        'Hospital'=>'Hospital','Hotel'=>'Hotel',
						                        'Industrial'=>'Industrial','No se sabe'=>'No se sabe',
						                        'Oficinas'=>'Oficinas','Parque'=>'Parque',
						                        'Religioso'=>'Religioso'
						                        ],
						                        null,
						                        ['class'=>'w100','ng-model'=>'uso'])}}
							</td>
						</tr>
						<tr>
							<td>Tipo de construción</td>
							<td>
								{{Form::select('tipo_construccion',
						                        [''=>'Seleccione opción',
						                        'Acero'=>'Acero',                       
						                        'Adobe'=>['Adobe-Losa maciza'=>'Losa Maciza',
						                              'Adobe-Lámina de acero'=>'Lamina de acero',
						                              'Adobe-Lámina de asbesto'=>'Lámina de asbesto',
						                              'Adobe-Madera'=>'Madera',
						                              'Adobe-Teja'=>'Teja'],                              
						                        'Bajareque'=>['Bajareque-Losa maciza'=>'Losa Maciza',                             
						                                'Bajareque-Lámina de acero'=>'Lámina de acero',
						                                'Bajareque-Lámina de asbesto'=>'Lámina de asbesto',
						                                'Bajareque-Madera'=>'Madera',
						                                'Bajareque-Teja'=>'Teja'],                  
						                        'Block'=>['Block-Losa maciza'=>'Losa Maciza',                             
						                                'Block-Lámina de acero'=>'Lámina de acero',
						                                'Block-Lámina de asbesto'=>'Lámina de asbesto',
						                                'Block-Madera'=>'Madera',
						                                'Block-Teja'=>'Teja'],                      
						                        'Concreto'=>['Concreto-Losa maciza'=>'Losa Maciza',                             
						                                'Concreto-Lámina de acero'=>'Lámina de acero',
						                                'Concreto-Lámina de asbesto'=>'Lámina de asbesto',
						                                'Concreto-Madera'=>'Madera',
						                                'Concreto-Teja'=>'Teja'],                       
						                        'Diversas'=>'Diversas',
						                        'Ladrillo'=>['Ladrillo-Losa maciza'=>'Losa Maciza',                             
						                                'Ladrillo-Lámina de acero'=>'Lámina de acero',
						                                'Ladrillo-Lámina de asbesto'=>'Lámina de asbesto',
						                                'Ladrillo-Madera'=>'Madera',
						                                'Ladrillo-Teja'=>'Teja'],
						                        'Madera'=>['Madera-Losa maciza'=>'Losa Maciza',                             
						                                'Madera-Lámina de acero'=>'Lámina de acero',
						                                'Madera-Lámina de asbesto'=>'Lámina de asbesto',
						                                'Madera-Madera'=>'Madera',
						                                'Madera-Teja'=>'Teja'], 
						                        'Panel de poliestireno'=>['Panel de poliestireno-Losa maciza'=>'Losa Maciza',                             
						                                'Panel de poliestireno-Lámina de acero'=>'Lámina de acero',
						                                'Panel de poliestireno-Lámina de asbesto'=>'Lámina de asbesto',
						                                'Panel de poliestireno-Madera'=>'Madera',
						                                'Panel de poliestireno-Teja'=>'Teja'],
						                        'Panel de yeso'=>['Panel de yeso-Losa maciza'=>'Losa Maciza',                             
						                                'Panel de yeso-Lámina de acero'=>'Lámina de acero',
						                                'Panel de yeso-Lámina de asbesto'=>'Lámina de asbesto',
						                                'Panel de yeso-Madera'=>'Madera',
						                                'Panel de yeso-Teja'=>'Teja'],
						                        'Piedra'=>['Piedra-Losa maciza'=>'Losa Maciza',                             
						                                'Piedra-Lámina de acero'=>'Lámina de acero',
						                                'Piedra-Lámina de asbesto'=>'Lámina de asbesto',
						                                'Piedra-Madera'=>'Madera',
						                                'Piedra-Teja'=>'Teja']],                                                          
						                        null,
						                        ['class'=>'w100','ng-model'=>'tipo_construccion'])}}
								<span class="error"></span>
							</td>
						</tr>
						<tr>
							<td>Fotografía de la construcción</td>
							<td colspan="3">
								{{Form::file('image')}}
							</td>
						</tr>
					</table>
				</div>
			</div>

			<div class="category" ng-init="tab3 = true" ng-class="{invalid: validtab3}">
				<h3 class="category-title" ng-click="tab3 = !tab3">Características de la construcción</h3>
				<div class="category-content blur" ng-show="tab3">
					<table class="table">
						<tr>
							<td colspan="2" class="title">Caracteristicas estructurales de los muros</td>
						</tr>
						<tr>
							<td>Espesor de muros en centímetros (cm)</td>
							<td>
								{{Form::text('espesor_muros',null,['class'=>'w50','ng-model'=>'espesor_muros'])}}
							</td>
						</tr>
						<tr>
							<td width="40%">¿Tiene repello?</td>
							<td width="60%">
								{{Form::select('repello',[
									''=>'Seleccione opción',
									'Si'=>'Si',
									'No'=>'No',
									'No se sabe'=>'No se sabe'
								],null,['class'=>'w50','ng-model'=>'repello'])}}
								<span class="error"></span>
							</td>
						</tr>
						<tr>
							<td>¿Tiene columnas aisladas o castillos?</td>
							<td>
								 {{Form::select('columnas',[
								                  ''  =>'Seleccione opción',
								                  'Si'=>'Si',
								                  'No'=>'No',
								                  'No se sabe'=>'No se sabe'],
								                  null,
								                  ['class'=>'w50','ng-model'=>'columnas'])}}
							</td>
						</tr>
						<tr>
							<td>Material de los muros</td>
							<td>
								{{Form::select('material_muro',
						                        [''=>'Seleccione opción',
						                        'Adobe'=>'Adobe',
						                        'Bajareque'=>'Bajareque',
						                        'Bambu'=>'Bambu',
						                        'Block'=>'Block',
						                        'Concreto'=>'Concreto',
						                        'Ladrillo'=>'Ladrillo',
						                        'Lamina'=>'Lamina',
						                        'Lamina de cartón'=>'Lamina de cartón',
						                        'Lamina de zinc'=>'Lamina de zinc',
						                        'Madera'=>'Madera',
						                        'Panel de poliestireno'=>'Panel de poliestireno',
						                        'Panel de yeso'=>'Panel de yeso',
						                        'Piedra'=>'Piedra',
						                        'Teja de cartón'=>'Teja de cartón'],
						                        null,
						                        ['class'=>'w50','ng-model'=>'material_muro'])}}
							</td>
						</tr>
						<tr>
							<td>Densidad de los muros</td>
							<td>
								 {{Form::select('densidad_muro',
						                         [''=>'Seleccione opción',
						                         'Alta'=>'Alta',
						                         'Baja'=>'Baja',
						                         'Media'=>'Media',
						                         'Perimetral'=>'Perimetral',
						                         'Poca'=>'Poca',
						                         'Solo en el perimetro'=>'Solo en el perimetro'],
						                         null,
						                         ['class'=>'w50','ng-model'=>'densidad_muro'])}}
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
								 {{Form::select('tipo_suelo',
						                         [''=>'Seleccione opción',
						                          'A:Blando'=>'Material A:Blando',
						                          'B:Medio'=>'Material B:Medio',
						                          'C:Solido'=>'Material C:Solido'],
						                         null,
						                         ['class'=>'w50','ng-model'=>'tipo_suelo'])}}
							</td>
						</tr>
						<tr>
							<td>Tipo de cimentación</td>
							<td>
								{{Form::select('tipo_cimentacion',
					                         [''=>'Seleccione opción',
					                          'Losa de cimentación'=>'Losa de cimentacion',
					                          'Muro de contención'=>'Muro de contencion',
					                          'Ninguna'=>'Ninguna',
					                          'No tiene cimentación'=>'No tiene cimentación',
					                          'Piedra'=>'Piedra',
					                          'Pilotes de fricción'=>'Pilotes de fricción',
					                          'Pilotes de punta sin control'=>'Pilotes de punta sin control',
					                          'Pilotes de punta con control'=>'Pilotes de punta con control',
					                          'Pilotes entrelazados'=>'Pilotes entrelazados',
					                          'Zapatas aisladas'=>'Zapatas aisladas',
					                          'Zapatas Cajon'=>'Zapatas Cajon',
					                          'Zapatas Corridas'=>'Zapatas Corridas'
					                          ],
					                         null,
					                         ['class'=>'w50','ng-model'=>'tipo_cimentacion'])}}
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
								{{Form::text('espesor_techo',null,['class'=>'w100','ng-model'=>'espesor_techo'])}}
							</td>
							<td width="25%">Tipo de techo</td>
							<td width="25%">
								{{Form::select('tipo_techo',
						                        [''=>'Seleccione opción',
						                        'Lamina de asbesto'=>'Lamina de asbesto',
						                        'Lamina de cartón'=>'Lamina de cartón',
						                        'Lamina metalica'=>'Lamina metalica',
						                        'Losa aligerada'=>'Losa aligerada',
						                        'Losa maciza'=>'Losa maciza',
						                        'Losa maciza y teja'=>'Losa maciza y teja',
						                        'Madera'=>'Madera',
						                        'Madera y teja'=>'Madera y teja',
						                        'No tiene'=>'No tiene',
						                        'Paja'=>'Paja',
						                        'Panel de poliestireno'=>'Panel de poliestireno',
						                        'Teja'=>'Teja',
						                        'Teja de barro'=>'Teja de barro'],      
						                        null,
						                        ['class'=>'w100','ng-model'=>'tipo_techo'])}}                
							</td>
						</tr>
						<tr>
							<td>Tipo de piso</td>
							<td>
								 {{Form::select('tipo_piso',
						                        [''=>'Seleccione opción',
						                        'Cemento'=>'Cemento',
						                        'Concreto'=>'Concreto',
						                        'Lozeta de barro'=>'Lozeta de barro',
						                        'Marmol'=>'Marmol',
						                        'Mozaico'=>'Mozaico',
						                        'Piso ceramico'=>'Piso ceramico',
						                        'Tierra'=>'Tierra'],
						                        null,
						                        ['class'=>'w100','ng-model'=>'tipo_piso'])}}
							</td>
							<td>Pendiente (inclinacion)</td>
							<td>
								{{Form::select('pendiente',[
							                  ''=>'Seleccione opción',
							                  '&lt;5%'=>'&lt;5%',
							                  '&gt;5%'=>'&gt;5%'
							                ],null,['class'=>'w100','ng-model'=>'pendiente'])}}
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
								{{Form::text('largo',null,['class'=>'w100','ng-model'=>'largo'])}}
							</td>
							<td width="25%">Regularidad en planta</td>
							<td width="25%">
								 {{Form::select('reg_planta',
						                        [''=>'Seleccione opción',
						                        'Alta'=>'Alta',
						                        'Baja'=>'Baja',
						                        'Buena'=>'Buena',
						                        'Intermedia'=>'Intermedia',
						                        'Media'=>'Media'],
						                        null,
						                        ['class'=>'w100','ng-model'=>'reg_planta'])}}
							</td>
						</tr>
						<tr>
							<td>Ancho</td>
							<td>
								{{Form::text('ancho',null,['class'=>'w100','ng-model'=>'ancho'])}}
							</td>
							<td>Regularidad vertical</td>
							<td>
								{{Form::select('reg_vertical',
						                        [''=>'Seleccione opción',
						                        'Alta'=>'Alta',
						                        'Baja'=>'Baja',
						                        'Buena'=>'Buena',
						                        'Intermedia'=>'Intermedia',
						                        'Media'=>'Media'],
						                        null,
						                        ['class'=>'w100','ng-model'=>'reg_vertical'])}}
							</td>
						</tr>
						<tr>
							<td>Alto</td>
							<td>
								{{Form::text('alto',null,['class'=>'w100','ng-model'=>'alto'])}}
							</td>
						</tr>
						<tr>
							<td>Área aproximada construida (m2)</td>
							<td>
								{{Form::text('area',null,['class'=>'w100','ng-model'=>'area'])}}
							</td>
						</tr>
					</table>
				</div>
			</div>

			<div class="category" ng-init="tab4 = true" ng-class="{invalid: validtab4}">
				<h3 class="category-title" ng-click="tab4 = !tab4">Antecedentes históricos de la construcción</h3>
				<div class="category-content blur" ng-show="tab4">
					<table class="table">
						<tr>
							<td width="20%">¿Cambios en el sistema constructivo?</td>
							<td width="25%">
								{{Form::select('cambios_sistema',[
							                  ''=>'Seleccione opción',
							                  'Si'=>'Si',
							                  'No'=>'No',
							                  'No se sabe'=>'No se sabe'
							     	           ],null,['class'=>'w90','ng-model'=>'cambios_sistema'])}}
							</td>
							<td>Descripción</td>
							<td>
								{{Form::textarea('descripcion',null,['cols'=>"30",'rows'=>"3",'class'=>'w100','ng-model'=>'descripcion'])}}
							</td>
						</tr>
						<tr>
							<td>¿Daños?</td>
							<td>
								{{Form::select('danos',[
											  ''=>'Seleccione opción',	
							                  'Si'=>'Si',
							                  'No'=>'No',
							                  'No se sabe'=>'No se sabe'
							                	],null,['class'=>'w90','ng-model'=>'danos'])}}
							</td>
							<td>Descripción del daño</td>
							<td>
								{{Form::textarea('descripcion_danos',null,['cols'=>"30",'rows'=>"3",'class'=>'w100','ng-model'=>'descripcion_danos'])}}
							</td>
						</tr>
						<tr>
							<td>Mantenimiento</td>
							<td>
								{{Form::select('mantenimiento',
						                        [''=>'Seleccione opción',
						                        'Adecuado'=>'Adecuado',
						                        'Bueno'=>'Bueno',
						                        'Incompleto'=>'Incompleto',
						                        'Malo'=>'Malo',
						                        'Nulo'=>'Nulo'],
						                        null,
						                        ['class'=>'w90','ng-model'=>'mantenimiento'])}}
							</td>
							<td>
								Tipo de fenomeno
							</td>
							<td>
								 {{Form::select('fenomeno',
						                        [''=>'Seleccione opción',
						                        'Deslave'=>'Deslave',
						                        'Incendio'=>'Incendio',
						                        'Inundación'=>'Inundación',
						                        'Lluvia'=>'Lluvia',
						                        'Lluvia y viento'=>'Lluvia y viento',
						                        'Lluvias'=>'Lluvias',
						                        'No'=>'No',
						                        'Sismo'=>'Sismo',
						                        'Sismo y lluvia'=>'Sismo y lluvia',
						                        'Sismo y viento'=>'Sismo y viento',
						                        'Sismo, viento y lluvia'=>'Sismo, viento y lluvia',
						                        'Viento'=>'Viento'],
						                        null,
						                        ['class'=>'w90','ng-model'=>'fenomeno'])}}
							</td>
						</tr>
						<tr>
							<td>Reparaciones previas?</td>
							<td>
								{{Form::select('reparaciones',[
							                  ''=>'Seleccione opción',
							                  'Si'=>'Si',
							                  'No'=>'No',
							                  'No se sabe'=>'No se sabe'
							                	],null,['class'=>'w90','ng-model'=>'reparaciones'])}}
							</td>
							<td>¿Remodelaciones?</td>
							<td>
								{{Form::select('remodelaciones',[
							                  ''=>'Seleccione opción',
							                  'Si'=>'Si',
							                  'No'=>'No',
							                  'No se sabe'=>'No se sabe'

							                ],null,['class'=>'w90','ng-model'=>'remodelaciones'])}}
							</td>
						</tr>
					</table>
				</div>
			</div>

			<div class="text-center margin-bottom blur" ng-if='formRegister.$valid'>
				<button type="submit" class="btn btn-blue"> Agregar nuevo registro</button>
			</div>

			{{Form::close()}}
		</article>
	</section>
@stop