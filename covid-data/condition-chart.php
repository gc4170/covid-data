<?php
$data='{"app":"dashboard","requestId":"Q124","timezone":"","panelId":25,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-07-01T17:53:00.956Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"6h","intervalMs":21600000,"targets":[{"data":null,"target":"aplicaciones_condicion_publico_tabla","refId":"A","hide":false,"type":"table"}],"maxDataPoints":886,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1625161980954","value":"1625161980954"},"__interval":{"text":"6h","value":"6h"},"__interval_ms":{"text":"21600000","value":21600000}},"startTime":1625161980957,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';

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
  CURLOPT_POSTFIELDS =>$data,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: 73d722d882eb4c053e0af0e892680cb4=ba2bcce18ff1a8088d25d07973539530'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
// echo $response;
$array = json_decode($response)[0];

// $options = [
//     'body'        => $data,
//     'timeout'     => 9999999,
//     'headers'     => [
//         'Content-Type' => 'application/json',
//     ],'data_format' => 'body'
// ];
// $result = wp_remote_post( $endpoint, $options );


// $array = json_decode($result['body'])[0];

// var_dump($array);
?>
<style type="text/css">
  .google-visualization-table .gradient,.google-visualization-table-tr-head{
    background: none;
    color: #009FD4;
  }
  .google-visualization-table-table td{
        border-width: 0px 0px 0px 1px;
        line-height: 40px;
  }
  .google-visualization-table-table th{
        width: 50%;
        text-align: center;
        line-height: 40px;
  }
  .google-visualization-table-tr-head,.google-visualization-table-td.google-visualization-table-type-number{
    text-align: center;
    color: #009FD4;
    font-weight: bold;
  }
  .google-visualization-table-td{
    padding-left: 5%;
  }
</style>
<script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Condición');
        data.addColumn('number', 'Aplicaciones');
        data.addRows([

          <?php foreach ($array->rows as $key => $value) {
            echo '["'.$value[0].'",  '.$value[1].'],';
          }?>

        ]);

        var table = new google.visualization.Table(document.getElementById('condition-chart_div'));

      
        table.draw(data, {
          showRowNumber: false, 
          width: '100%', 
          height: '100%',
          title: 'Aplicaciones por condición'
        });
      }
    </script>
<div class="info">
   <h2 class="pt-6   mb-4-mobile  has-text-centered">Aplicaciones por condición</h2>   
   <p class="has-text-centered">
    El plan de vacunación se organizó en etapas: por edad, factores de riesgo, y priorizando personal estratégico. El siguiente gráfico muestra la cantidad de dosis aplicadas según el grupo o condición de las personas.
   </p>  
</div>
  <div id="condition-chart_div" class="mt-6" style="max-width: 1024px;width: 100%;height: 100%;margin: 0 auto;"></div>
