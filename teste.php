<?php

require 'sdk-api/SerproApi.php';

$serpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', "ee62f3ebb1156b63a3fe831a8a4cbbba");
$result = $serpro->consultarAuxilicioMunicipio('5300108', '202005', '1');
var_dump($result);