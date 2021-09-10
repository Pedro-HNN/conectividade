<?php
session_start();

require '../sdk-api/SerproApi.php';

$acao = $_GET["acao"];

$serpro = new SerproApi('http://api.portaldatransparencia.gov.br/api-de-dados', "ee62f3ebb1156b63a3fe831a8a4cbbba");

$result = $serpro->consultarBolsaCpfNis("2020".$_POST['mes'],"2020".$_POST['mes'],$_POST['cpf'],"1");


$_SESSION['ultimoValor'] = $result;

switch($acao){
    default:
        $_SESSION['result'] = $_POST['mes'];
        header('Location: ../views/listagem.php');
        die;
}