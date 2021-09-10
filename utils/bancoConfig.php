<?php
session_start();

$servidor = "bd.inova.serpro.gov.br";
$port = 5432;
$user = "equipe18";
$password = "";

$conexao = pg_connect($servidor, $user, $password) or die();

echo "Conexão feita com sucesso.";