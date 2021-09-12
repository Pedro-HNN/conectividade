<?php

session_start();

$acao = $_GET['acao'];

switch($acao){
    case 'consultarBolsaMunicipio':
        $codigoIbge = $_POST['codigoIbge'];
        $pagina = $_POST['pagina'];
        $mesAno = $_POST['mesAno'];
        break;

}