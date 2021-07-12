<script type="text/javascript">
	
	function change_prov(selectObject) {
	  var value = selectObject.value;  
	  console.log(value);
	  jQuery(".webform-component-markup").css("display","none");
	  jQuery("."+value).css("display","block");
	}

</script>
<div class="container info pb-6">

	<div class="panel-separator"></div>
	<div class="panel-pane pane-block pane-webform-client-block-248552 col-md-8 col-md-offset-2">
		<div class="pane-content">
			<form class="webform-client-form webform-client-form-248552 webform-conditional-processed" action="/coronavirus/vacuna" method="post" id="webform-client-form-248552" accept-charset="UTF-8">
				<div>
					<div class="webform-progressbar"></div>
					<div class="form-item webform-component webform-component-select provincia form-group form-item form-item-submitted-provincia form-type-select form-group">
						<select class="form-control form-select" id="edit-submitted-provincia" name="submitted[provincia]" onchange="change_prov(this)" style="
    width: 100%;
    height: 50px;
    margin-top: 20px;
    font-weight: bold;
    background: #f1faff;
    text-align: center;
    padding-left: 20px;
    padding-right: 20px;
">
							<option value="" selected="selected">Seleccioná</option>
							<option value="buenosaires">Buenos Aires</option>
							<option value="catamarca">Catamarca</option>
							<option value="chaco">Chaco</option>
							<option value="chubut">Chubut</option>
							<option value="caba">Ciudad Autónoma de Buenos Aires</option>
							<option value="cordoba">Córdoba</option>
							<option value="corrientes">Corrientes</option>
							<option value="entrerios">Entre Ríos</option>
							<option value="formosa">Formosa</option>
							<option value="jujuy">Jujuy</option>
							<option value="lapampa">La Pampa</option>
							<option value="larioja">La Rioja</option>
							<option value="mendoza">Mendoza</option>
							<option value="misiones">Misiones</option>
							<option value="neuquen">Neuquén</option>
							<option value="rionegro">Río Negro</option>
							<option value="salta">Salta</option>
							<option value="sanjuan">San Juan</option>
							<option value="sanluis">San Luis</option>
							<option value="santacruz">Santa Cruz</option>
							<option value="santafe">Santa Fe</option>
							<option value="santiago">Santiago del Estero</option>
							<option value="tierradelfuego">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
							<option value="tucuman">Tucumán</option>
						</select>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 buenosaires form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Buenos Aires</strong> abrió un registro para que las personas interesadas en recibir la vacuna dejen sus datos y se les asignen turnos.</p>
						<p>Inscriben a adultos mayores de 18 años. En una primera etapa de la vacunación priorizan a:</p>
						<ul>
							<li>adultos entre 18 y 59 años que acrediten enfermedades preexistentes,</li>
							<li>adultos mayores de 60 años,</li>
							<li>personal de salud,</li>
							<li>personal de seguridad, y</li>
							<li>personal docente y auxiliar.</li>
						</ul>
						<p><a href="https://www.gba.gob.ar/vacunate/" title="" class="btn btn-primary" target="_blank">Registrate</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 catamarca form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Catamarca</strong> está vacunando por edad y terminación de DNI o inicial del apellido.</p>
						<p>Ante cualquier duda, te ofrece las líneas orientadoras <a href="tel:3834238872">383-4238872</a> y <a href="tel:3834030003">383-4030003</a>.</p>
						<p><a href="https://coronavirus-dengue.catamarca.gob.ar/#/vacunacion/canal/31/mensajes" title="" class="btn btn-primary" target="_blank">Conocé el cronograma de vacunación de Catamarca</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 chaco form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Chaco</strong> abrió un registro que va habilitando para diversos grupos en función de edad, exposición y factores de riesgo.</p>
						<p>En este momento está habilitado para personas con:</p>
						<ul>
							<li>enfermedad pulmonar crónica;</li>
							<li>diabetes;</li>
							<li>enfermedad renal crónica;</li>
							<li>obesidad grados 2 y 3; o</li>
							<li>enfermedad cardiovascular.</li>
						</ul>
						<p>También ofrece un servicio de asistencia por <a href="https://api.whatsapp.com/send?phone=+54%209%2011%206273-0000&amp;text=@CHACO%20SALUD" target="_blank">Whatsapp</a>.</p>
						<p><a href="https://elijovacunarme.chaco.gob.ar/" title="" class="btn btn-primary" target="_blank">Conocé el plan de vacunación de Chaco</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 chubut form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Chubut</strong> abrió un registro. El orden de prioridad para aplicar la vacuna es:</p>
						<ul>
							<li>personal de salud;</li>
							<li>mayores de 60 años;</li>
							<li>personas entre 18 y 59 años con factores de riesgo;</li>
							<li>personal del Ministerio de Educación y de Seguridad sin factores de riesgo; y</li>
							<li>personas entre 18 y 59 años sin factores de riesgo;</li>
						</ul>
						<p><a href="https://www.vacunate.chubut.gov.ar/" title="" class="btn btn-primary" target="_blank">¿Pertenecés a uno de estos grupos? Inscribite</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 caba form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>A la fecha, la <strong>Ciudad Autónoma de Buenos Aires</strong> abrió el registro para:</p>
						<ul>
							<li>personal de salud,</li>
							<li>mayores de 40 años,</li>
							<li>personal docente y no docente mayor de 18 años,</li>
							<li>mayores de 18 años con condiciones de riesgo, gestantes o en período de lactancia, y</li>
							<li>personal estratégico de la Ciudad (de Seguridad, del Ministerio de Desarrollo Humano y Hábitat, personas que trabajan en comedores) mayor de 18 años.</li>
						</ul>
						<p><a href="https://www.buenosaires.gob.ar/coronavirus/vacunacion-covid-19" title="" class="btn btn-primary" target="_blank">Conocé el plan de vacunación de CABA</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 cordoba form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Córdoba</strong> abrió un registro voluntario para que se anoten quienes deseen recibir la vacuna.</p>
						<p>Luego de inscribirte, deberás esperar que te notifiquen el turno (día, hora y lugar de inmunización).</p>
						<p><a href="https://vacunacioncovid19.cba.gov.ar/" title="" class="btn btn-primary" target="_blank">Inscribite</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 corrientes form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Corrientes</strong> habilitó un sistema en línea para pedir turno de vacunación.</p>
						<p><a href="https://vacunate.corrientes.gob.ar/vacunate" title="" class="btn btn-primary" target="_blank">Inscribite</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 entrerios form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Entre Ríos</strong> abrió un registro para que se inscriban quienes quieran recibir la vacuna.</p>
						<p>Si tenés dudas o síntomas, te ofrecen la línea gratuita <a href="tel:08007778476">0800-777-8476</a></p>
						<p><a href="https://vacunacion.argentina.gob.ar/vacunacion/inscripcion/AR-E" title="" class="btn btn-primary" target="_blank">Inscribite</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 formosa form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>Debés consultar el sitio oficial sobre coronavirus de la <strong>Provincia de Formosa</strong>.</p>
						<p><a href="https://www.formosa.gob.ar/coronavirus" title="" class="btn btn-primary" target="_blank">Ingresá</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 jujuy form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>Debés consultar el sitio oficial sobre coronavirus de la <strong>Provincia de Jujuy</strong>.</p>
						<p><a href="http://salud.jujuy.gob.ar/coronavirus/" title="" class="btn btn-primary" target="_blank">Continuá</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 lapampa form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de La Pampa</strong> abrió un registro para que las personas interesadas en recibir la vacuna dejen sus datos.</p>
						<p><a href="https://vacunate.lapampa.gob.ar/" title="" class="btn btn-primary" target="_blank">Inscribite</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 larioja form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de La Rioja</strong> abrió un registro para que las personas interesadas en recibir la vacuna dejen sus datos.</p>
						<p><a href="https://informaticlr.com/vacunas_c19/" title="" class="btn btn-primary" target="_blank">Preinscribite</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 mendoza form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Mendoza</strong> abrió un registro en el que pueden inscribirse:</p>
						<ul>
							<li>mayores de 35 años;</li>
							<li>profesionales de la salud mayores de 18 años;</li>
							<li>embarazadas mayores de 18 años;</li>
							<li>mayores de 18 años con factores de riesgo:
								<ul>
									<li>obesidad,</li>
									<li>diabetes,</li>
									<li>enfermedad cardiovascular,</li>
									<li>enfermedad renal crónica,</li>
									<li>epoc,</li>
									<li>asma grave,</li>
									<li>fibrosis quística,</li>
									<li>cirrosis,</li>
									<li>síndrome de down,</li>
									<li>VIH,</li>
									<li>tuberculosis activa,</li>
									<li>discapacidad intelectual y del desarrollo,</li>
									<li>enfermedad oncológica y oncohematológica activa o con 12 meses diagnóstico,</li>
									<li>personas en lista espera de trasplante de órganos sólidos.</li>
								</ul>
							</li>
						</ul>
						<p>PAMI y OSEP vacunarán a los médicos de cabecera que trabajan en delegaciones y profesionales que realizan internación domiciliaria.</p>
						<p>El personal de geriátricos y centros de hemodiálisis, así como los pacientes y personas institucionalizadas, <strong>no deben inscribirse</strong>.</p>
						<p><a href="https://www.mendoza.gov.ar/vacunacion-covid-19/" title="" class="btn btn-primary" target="_blank">¿Pertenecés a uno de esos grupos? Inscribite</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 misiones form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Misiones</strong> vacuna sin turno con primera dosis a:</p>
						<ul>
							<li>mayores de 40 años,</li>
							<li>mayores de 18 años con factores de riesgo, y</li>
							<li>embarazadas.</li>
						</ul>
						<p><a href="https://salud.misiones.gob.ar/plan-estrategico-de-vacunacion-contra-el-covid-19-misiones/" title="" class="btn btn-primary" target="_blank">Conocé más</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 neuquen form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Neuquén</strong> abrió un registro para asignar turnos de vacunación a:</p>
						<ul>
							<li>personas gestantes mayores de 18 años;</li>
							<li>mayores de 35 años;</li>
							<li>personal de salud en actividad;</li>
							<li>personas con discapacidad y factores de riesgo asociado;</li>
							<li>fuerzas de seguridad; y</li>
							<li>mayores de 18 años con factores de riesgo.</li>
						</ul>
						<p><a href="https://www.saludneuquen.gob.ar/campana-de-vacunacion-contra-el-coronavirus/" title="" class="btn btn-primary" target="_blank">¿Pertenecés a uno de estos grupos? Inscribite</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 rionegro form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Río Negro</strong> está vacunando a:</p>
						<ul>
							<li>docentes,</li>
							<li>mayores de 60 años, y</li>
							<li>personas con factores de riesgo que tengan entre 18 y 59 años:</li>
						</ul>
						<p>A tal fin, abrió un registro exclusivo para docentes y otro para el resto de la población.</p>
						<p>Las personas entre 18 y 59 años sin factores de riesgo que quieran inscribirse lo pueden hacer, pero en este momento no se les asignarán turnos, que se habilitarán más adelante en función de la disponibilidad de vacunas.</p>
						<p><a href="https://vacunate.rionegro.gov.ar/?contID=65148" title="" class="btn btn-primary" target="_blank">¿Pertenecés a uno de esos grupos? Anotate</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 salta form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Salta</strong> abrió un registro de solicitud de preturnos para mayores de 30 años y adultos de entre 18 y 40 años con factores de riesgo (primera dosis en todos los casos).</p>
						<p>El personal de salud, el de fuerzas armadas y de seguridad, los docentes y personal no docente de todos los niveles educativos, los responsables del funcionamiento del Estado y el personal del servicio penitenciario están en proceso de vacunación con primera y segunda dosis.</p>
						<p><a href="https://vacunate.salta.gob.ar/" title="" class="btn btn-primary" target="_blank">¿Sos mayor de 30 años o mayor de 18 con factores de riesgo? Solicitá preturno</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 sanjuan form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de San Juan</strong> abrió un registro para asignar turnos de vacunación (primera dosis) a:</p>
						<ul>
							<li>personal de salud;</li>
							<li>mayores de 40 años;</li>
							<li>mayores de 18 años con factores de riesgo; y</li>
							<li>personal docente y no docente.</li>
						</ul>
						<p>Si sos <strong>mayor de 60 años</strong>, podés ir a aplicarte la primera dosis <strong>sin turno</strong>.</p>
						<p>También abrió un registro para personal de salud que ya está en fecha de recibir la segunda dosis,</p>
						<p><a href="https://sisanjuan.gob.ar/vacunacionsanjuan" title="" class="btn btn-primary" target="_blank">Conocé más</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 sanluis form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de San Luis</strong> abrió un registro para todas las personas mayores de 18 años que quieran recibir la vacuna.</p>
						<p><a href="http://vacunacioncovid.sanluis.gov.ar/Inscripcion/" title="" class="btn btn-primary" target="_blank">Inscribite</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 santacruz form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Santa Cruz</strong> asignará próximamente nuevos turnos de vacunación.</p>
						<p><a href="https://www.santacruz.gob.ar/vacunarparaprevenir" title="" class="btn btn-primary" target="_blank">Conocé más</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 santafe form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La <strong>Provincia de Santa Fe</strong> abrió un registro para que las personas que quieran recibir la vacuna dejen sus datos.</p>
						<p><a href="https://www.santafe.gob.ar/santafevacunacovid/inicio" title="" class="btn btn-primary" target="_blank">Registrate</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 santiago form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>Consultá el sitio oficial de la <strong>Provincia de Santiago del Estero</strong>.</p>
						<p><a href="http://www.msaludsgo.gov.ar/web2/" title="" class="btn btn-primary" target="_blank">Conocé más</a></p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 tierradelfuego form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>La provincia de <strong>Tierra del Fuego, Antártida e Islas del Atlántico Sur</strong> abrió un registro para que se preinscriban las personas de <strong>18 a 59 años</strong> con los siguientes <strong>factores de riesgo</strong>: enfermedad cardíaca crónica grave; diabetes; obesidad IMC &gt;=35; insuficiencia renal crónica severa en diálisis o con expectativas de ingresar a diálisis en los siguientes seis meses; enfermedad respiratoria crónica (EPOC grave, asma grave, displasia broncopulmonar grave, pulmón único); cirrosis; trasplante de órganos sólidos o en lista de trasplante; VIH; enfermedad renal crónica (incluido pacientes en diálisis crónica); personas cursando tuberculosis activa (caso nuevo o recaída, diagnosticados en los últimos 12 meses); personas con discapacidad residentes de hogares, residencias y pequeños hogares; personas con discapacidad Intelectual y del desarrollo que inhabilite las capacidades individuales de ejecutar, comprender o sostener en el tiempo las medidas de cuidado personal para evitar el contagio o transmisión de la COVID-19; síndrome de down; pacientes oncológicos y oncohematológicos con diagnóstico reciente o enfermedad "activa" (menos de un año desde el diagnóstico; tratamiento actual o haber recibido tratamiento inmunosupresor en los últimos 12 meses; enfermedad en recaída o no controlada).</p>
						<p><a href="https://www.tierradelfuego.gob.ar/vacunatdf/" title="" class="btn btn-primary" target="_blank">¿Tenés uno de esos factores de riesgo? Preinscribite</a></p>
						<p>Si sos <strong>mayor de 60 años</strong>, podés sacar <strong>turno</strong> para recibir la vacuna.</p>
						<p>Llamá al <a href="tel:08003330358">0800-333-0358</a> de 10 a 20. También:</p>
						<h5>En Ushuaia</h5>
						<p>Enviá un WhatsApp de 10 a 16 al <a href="https://api.whatsapp.com/send?phone=5492901470756" target="_blank">02901-470756</a> o el <a href="https://api.whatsapp.com/send?phone=5492901604075" target="_blank">02901-604075</a>.</p>
						<h5>En Río Grande</h5>
						<p>Enviá un WhatsApp de 10 a 16 al <a href="https://api.whatsapp.com/send?phone=5492964579195" target="_blank">02964-579195</a>.</p>
						<h5>En Tolhuin</h5>
						<p>Pedí turno en el vacunatorio del Centro Asistencial de lunes a viernes de 8 a 20 horas.</p>
						<p>También podés <a href="tel:5492901412878">llamar</a> o <a href="https://api.whatsapp.com/send?phone=5492901412878" target="_blank">enviar Whatsapp</a> al 02901-412878 de 8 a 16.</p>
					</div>
					<div class="form-item webform-component webform-component-markup border mt-6 tucuman form-group form-item form-type-markup form-group webform-conditional-hidden" style="display: none;">
						<p>Debés consultar el sitio oficial sobre vacunación de la <strong>Provincia de Tucumán</strong>.</p>
						<p><a href="https://www.tucuman.gob.ar/coronavirus/8545cead-253b-454a-92e8-97b40018f2c0" title="" class="btn btn-primary" target="_blank">Ingresá</a></p>
					</div>
					
			
					
				</div>
			</form>
		</div>
	</div>


</div>