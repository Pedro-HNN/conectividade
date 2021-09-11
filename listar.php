<?php


    $url = "http://api.portaldatransparencia.gov.br/api-de-dados/auxilio-emergencial-beneficiario-por-municipio?codigoIbge=5300108&mesAno=202005&pagina=1";

    $client = curl_init($url);


    $headers = ['chave-api-dados: ee62f3ebb1156b63a3fe831a8a4cbbba'];


    curl_setopt($client, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);

    $response = curl_exec($client);


    $mesDisponibilizacao = json_decode($response);


    /*echo ($response);
    echo ('/n___________________________________________________________________/n');
    echo ($orgaos);*/



    foreach ($mesDisponibilizacao as &$mes) {
      

        echo "<p>Nome Beneficiario : :".$mes->beneficiario->nome."</p>";
        echo "<p>Valor da Parcela: $mes->valor </p>";
        echo "<p>Descrição: $mes->mesDisponibilizacao</p>";


    }


    curl_close($client);

?>

<html>
<head>
    <title>Beneficiarios Bolsa Familia</title>
</head>
<body>
<div class="card bg-default">
    <div class="card-body">
        <div class="chart">
            <!-- Chart wrapper -->
            <canvas id="chart-sales" class="chart-canvas"></canvas>
        </div>
    </div>
</div>
</body>

</html>
