var endpoint = 'https://coronavirus.msal.gov.ar/vacunas/d/8wdHBOsMk/seguimiento-vacunacion-covid/api/datasources/proxy/1/query';


function get_timeline(){
  var timeline='{"app":"dashboard","requestId":"Q107","timezone":"","panelId":14,"dashboardId":3,"range":{"from":"2020-12-29T03:00:00.000Z","to":"2021-07-01T17:30:29.792Z","raw":{"from":"2020-12-29T03:00:00.000Z","to":"now"}},"timeInfo":"","interval":"6h","intervalMs":21600000,"targets":[{"data":null,"target":"evolucion_aplicaciones_total_pais","refId":"A","hide":false,"type":"timeseries"}],"maxDataPoints":629,"scopedVars":{"__from":{"text":"1609210800000","value":"1609210800000"},"__to":{"text":"1625160604890","value":"1625160604890"},"__dashboard":{"value":{"name":"Seguimiento vacunación Covid","uid":"8wdHBOsMk"}},"__org":{"value":{"name":"minsal","id":0}},"__interval":{"text":"6h","value":"6h"},"__interval_ms":{"text":"21600000","value":21600000}},"startTime":1625160650950,"rangeRaw":{"from":"2020-12-29T03:00:00.000Z","to":"now"},"adhocFilters":[]}';
  $.ajax({
      url: endpoint,
      type: 'POST',
      dataType: 'json',
      dataFormat: 'body',
      contentType: 'application/json',
      crossDomain: true,
      processData: false,
      data: timeline,
      success: function (data) {
        alert(JSON.stringify(data));
      },
      error: function(){
        alert("Cannot get data");
      }
  });


}
