<?php

use App\ApiController;

$router->get('/', function(){
    require '../views/default.html';
    require '../scripts/jquery.php';
    echo json_encode($_REQUEST);
});

//Endpoints Bolsa Familia
$router->get('/consulta/bolsa/municipio', function(){
    $codigoIbge = $_REQUEST['codigoIbge'];
    $mesAno = $_REQUEST['mesAno'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarBolsaMunicipio($codigoIbge, $mesAno, $pagina);
    echo json_encode($result);
    die;
});

$router->get('/consulta/bolsa/cpf-nis', function(){
    $anoMesCompetencia = $_REQUEST['anoMesCompetencia'];
    $anoMesReferencia = $_REQUEST['anoMesReferencia'];
    $codigo = $_REQUEST['codigo'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarBolsaCpfNis($anoMesCompetencia, $anoMesReferencia, $codigo, $pagina);
    echo json_encode($result);
    die;
});

$router->get('/consulta/bolsa/parcela-nis', function(){
    $anoMesCompetencia = $_REQUEST['anoMesCompetencia'];
    $anoMesReferencia = $_REQUEST['anoMesReferencia'];
    $nis = $_REQUEST['nis'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarBolsaSaqueNis($anoMesCompetencia, $anoMesReferencia, $nis, $pagina);
    echo json_encode($result);
    die;
});

//Endpoinst Auxilio Emergencial
$router->get('/consulta/auxilio/benifeciario-municipio', function(){
    $codigoIbge = $_REQUEST['codigoIbge'];
    $mesAno = $_REQUEST['mesAno'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarAuxiliobenifeciarioMunicipio($codigoIbge, $mesAno, $pagina);
    echo json_encode($result);
    die;
});

$router->get('/consulta/auxilio/nis', function(){
    $codigoBenifeciario = $_REQUEST['codigoBenifeciario'];
    $codigoResponsavelFamiliar = $_REQUEST['codigoResponsavelFamiliar'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarAuxilioNis($codigoBenifeciario, $codigoResponsavelFamiliar, $pagina);
    echo json_encode($result);
    die;
});

$router->get('/consulta/auxilio/municipio', function(){
    $codigoIbge = $_REQUEST['codigoIbge'];
    $mesAno = $_REQUEST['mesAno'];
    $pagina = $_REQUEST['pagina'];
    $apiController = new ApiController();
    $result = $apiController->consultarAuxilioMunicipio($codigoIbge, $mesAno, $pagina);
    echo json_encode($result);
    die;
});