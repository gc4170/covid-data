<?php

$endpoint = 'https://coronavirus.msal.gov.ar/vacunas/d/8wdHBOsMk/seguimiento-vacunacion-covid/api/datasources/proxy/1/query';

$timeline='{"app":"dashboard","requestId":"Q107","timezone":"","panelId":14,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-07-01T17:30:29.792Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"6h","intervalMs":21600000,"targets":[{"data":null,"target":"evolucion_aplicaciones_total_pais","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":629,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1625160604890","value":"1625160604890"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"6h","value":"6h"},"__interval_ms":{"text":"21600000","value":21600000}},"startTime":1625160650950,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';




$totalDocis='{"app":"dashboard","requestId":"Q103","timezone":"","panelId":10,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-05-10T21:23:42.828Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"12h","intervalMs":43200000,"targets":[{"data":null,"target":"distribucion_total_aplicaciones","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":100,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1620681822389","value":"1620681822389"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"12h","value":"12h"},"__interval_ms":{"text":"43200000","value":43200000}},"cacheTimeout":null,"startTime":1620681822830,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';

$primeraDocis='{"app":"dashboard","requestId":"Q104","timezone":"","panelId":11,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-05-21T00:53:47.331Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"12h","intervalMs":43200000,"targets":[{"data":null,"target":"aplicaciones_primera_dosis","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":100,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1621558426030","value":"1621558426030"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"12h","value":"12h"},"__interval_ms":{"text":"43200000","value":43200000}},"cacheTimeout":null,"startTime":1621558427333,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';

$segundaDocis='{"app":"dashboard","requestId":"Q105","timezone":"","panelId":12,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-05-10T20:05:22.113Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"12h","intervalMs":43200000,"targets":[{"data":null,"target":"aplicaciones_segunda_dosis","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":100,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1620677121707","value":"1620677121707"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"12h","value":"12h"},"__interval_ms":{"text":"43200000","value":43200000}},"cacheTimeout":null,"startTime":1620677122118,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';

$actualizacion='{"app":"dashboard","requestId":"Q100","timezone":"","panelId":20,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-07-05T19:50:18.084Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"12h","intervalMs":43200000,"targets":[{"data":null,"target":"ultima_actualizacion","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":100,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1625514615594","value":"1625514615594"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"12h","value":"12h"},"__interval_ms":{"text":"43200000","value":43200000}},"cacheTimeout":null,"startTime":1625514618084,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';

$poblacion=45808747;
?>





<div class="image_full datos">
		

</div>
<div class="container">
		<div class="info py-6">
					<p class="is-celeste has-text-centered"><b>
					En Argentina la campaña de vacunación contra el COVID-19 se inició el 29 de diciembre del año 2020. El primer lote de vacunas que entró al país tenía 300 mil dosis de Sputnik V, destinadas al personal de salud. Desde Ezeiza fueron distribuidas simultáneamente a 32 puntos del país.</b>
					</p>
				</div>


			<?php 
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$totalDocis,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: 73d722d882eb4c053e0af0e892680cb4=ba2bcce18ff1a8088d25d07973539530'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
if($result){
	$actualizacion_numero = json_decode($response)[0]->datapoints[0][0];
	$seconds = $actualizacion_numero / 1000;
}else{
	$actualizacion_numero = 0;
}

			// $options = [
			//     'body'        => $actualizacion,
			//     'timeout'     => 9999999,
			//     'headers'     => [
			//         'Content-Type' => 'application/json',
			//     ],'data_format' => 'body'
			// ];
			// $result = wp_remote_post( $endpoint, $options );
			// // var_dump($result);

			// if($result){
			// 	$actualizacion_numero = json_decode($result['body'])[0]->datapoints[0][0];
			// 	$seconds = $actualizacion_numero / 1000;
			// }else{
			// 	$actualizacion_numero = 0;
			// }
			?>
		<div class="info actualizacion mb-4"> 
			<div class="has-text-centered">
				<span>Actualizado <?php echo date("d/m/Y", $seconds) ?></span>
			</div>
		</div>


		<div class="columns ">

			<div class="column info " >


				<div class="columns my-6">
					<div class="column">
						<h4 class="border">
							<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-ico_1.png">Dosis <br />distribuidas<br />
							<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$totalDocis,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: 73d722d882eb4c053e0af0e892680cb4=ba2bcce18ff1a8088d25d07973539530'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
$numero = json_decode($response)[0]->datapoints[0][0];

							// $options = [
							//     'body'        => $totalDocis,
							//     'timeout'     => 9999999,
							//     'headers'     => [
							//         'Content-Type' => 'application/json',
							//     ],'data_format' => 'body'
							// ];
							// $result = wp_remote_post( $endpoint, $options );
							// 	// var_dump($result);
							// $numero = json_decode($result['body'])[0]->datapoints[0][0];
							echo '<span class="numero">'.number_format($numero, 0, '.', '.').'</span>';
							?>
						</h4>
					</div>
					<div class="column">
						<h4 class="border">
							<img src="<?php echo get_template_directory_uri(); ?>/covid-data/img/covid-ico_2.png">Dosis <br />Aplicadas<br />
							<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$primeraDocis,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: 73d722d882eb4c053e0af0e892680cb4=ba2bcce18ff1a8088d25d07973539530'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
if($result){
	$primeraDocis_numero = json_decode($response)[0]->datapoints[0][0];
}else{
	$primeraDocis_numero = 0;
}

$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => $endpoint,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>$segundaDocis,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: 73d722d882eb4c053e0af0e892680cb4=ba2bcce18ff1a8088d25d07973539530'
  ),
));
$response = curl_exec($curl);
curl_close($curl);
if($result){
	$segundaDocis_numero = json_decode($response)[0]->datapoints[0][0];
}else{
	$segundaDocis_numero = 0;
}
							// $options = [
							//     'body'        => $primeraDocis,
							//     'timeout'     => 9999999,
							//     'headers'     => [
							//         'Content-Type' => 'application/json',
							//     ],'data_format' => 'body'
							// ];
							// $result = wp_remote_post( $endpoint, $options );
							// // var_dump($result);
							
							// if($result){
							// 	$primeraDocis_numero = json_decode($result['body'])[0]->datapoints[0][0];
							// }else{
							// 	$primeraDocis_numero = 0;
							// }
							// $options = [
							//     'body'        => $segundaDocis,
							//     'timeout'     => 9999999,
							//     'headers'     => [
							//         'Content-Type' => 'application/json',
							//     ],'data_format' => 'body'
							// ];
							// $result = wp_remote_post( $endpoint, $options );
							// // var_dump($result);
							// if($result){
							// 	$segundaDocis_numero = json_decode($result['body'])[0]->datapoints[0][0];
							// }else{
							// 	$segundaDocis_numero = 0;
							// }
							echo '<span class="numero">'.number_format($segundaDocis_numero+$primeraDocis_numero, 0, '.', '.').'</span>';
							?>
						</h4>
					</div>
				</div>


				<h2 class="pt-6 mb-4-mobile has-text-centered">Personas vacunadas en Argentina</h2>

				<div class="my-6 px-6 px-0-mobile ">
					<table class="table is-fullwidth has-text-centered ">
						<tbody>
						    <tr>
								<td style="width:33%">*Primera dosis</td>
								<td style="width:33%;border-left: 1px solid #F0F0F0;border-right: 1px solid #F0F0F0;"><?php echo '<span>'.number_format($primeraDocis_numero, 0, '.', '.').'</span>'?></td>
								<td style="width:33%"><progress class="progress mt-1 is-medium  " min="0" max="100" value="<?php echo round((($primeraDocis_numero/$poblacion)*100),1)?>" ><?php echo round((($primeraDocis_numero/$poblacion)*100),1)?>%</progress></td>
						  	</tr>
						  	<tr>
								<td>*Segunda dosis</td>
								<td style="width:33%;border-left: 1px solid #F0F0F0;border-right: 1px solid #F0F0F0;"><?php echo '<span>'.number_format($segundaDocis_numero, 0, '.', '.').'</span>'?></td>
								<td><progress class="progress mt-1 is-medium " min="0" max="100" value="<?php echo round((($segundaDocis_numero/$poblacion)*100),1)?>" ><?php echo round((($segundaDocis_numero/$poblacion)*100),1)?>%</progress></td>
						  	</tr>
						</tbody>
					</table>
					<span>*Porcentaje calculado sobre 45.808.747 de personas, la proyección de población del INDEC para el 2021.</span>

				</div>
			</div>

	

			
		</div>
		<div class=" p-5 m-5 pt-0-mobile mt-0-mobile  mr-0-mobile ml-0-mobile">
			<?php include get_theme_file_path( '/covid-data/timeline-chart.php' );?>
		</div>
		<div class=" p-5 m-5 pt-0-mobile mt-0-mobile  mr-0-mobile ml-0-mobile">
			<?php include get_theme_file_path( '/covid-data/geo-chart2.php' );?>
		</div>
		<div class=" p-5 m-5 pt-0-mobile mt-0-mobile  mr-0-mobile ml-0-mobile">
			<?php include get_theme_file_path( '/covid-data/condition-chart.php' );?>

		</div>
		<div class=" p-5 m-5 pt-0-mobile mt-0-mobile  mr-0-mobile ml-0-mobile">
			<?php include get_theme_file_path( '/covid-data/geo-chart.php' );?>
		</div>



		<div class="container ">
			<div class="info">
				
				<div class="border mb-6 has-text-centered mx-6 mx-0-mobile">
<b>Fuentes</b><br /> <a href="https://www.argentina.gob.ar/coronavirus/vacuna/aplicadas" target="_blank"><u>Monitor público de vacunación<br /> Ministerio de Salud de la Nación</u></a>
				</div>
			</div>
			
		</div>

<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=60e73c36003943001ce6e7e8&product=inline-share-buttons" async="async"></script>
<div class="sharethis-inline-share-buttons pb-6 has-text-centered" ></div>


		<div class="container container pl-4 pr-4  p-5 m-5 pt-0-mobile mt-0-mobile  mr-0-mobile ml-0-mobile"> 
			<div class="info">
				
				<div class="border mb-6 has-text-centered mx-6 mx-0-mobile">
<b>CRÉDITOS</b> <br /> <br /> 
<p class="pb-3">	
<b>Diseño</b> <br />
Mariana Alessi 
</p>

<p class="pb-3">	
<b>Desarrollo</b>  <br />
Santiago Acosta Villa Abrille 
</p>

<p class="pb-3">	
<b>Coordinación</b> <br />
Ana Soffietto y Verónica Liso <br />
</p>	

<p class="pb-3">
<b>Producción periodística</b> <br />
 Agencia GO</p>	
				</div>
			</div>
			
		</div>


</div>