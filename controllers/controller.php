<?php
session_start();
$acao = $_GET["acao"];
$page = 'index.php';
switch($acao){
    case 'bolsa familia':

        $ch = curl_init();
        $curl_setopt($ch, CURLOPT_URL, """)

        header('Location: ../'.$page);
        die();
    default:
        $_SESSION['result'] = "teste concluido";
        header('Location: ../'.$page);
        die();
}