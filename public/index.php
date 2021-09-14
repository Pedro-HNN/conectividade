<?php
//TODOS OS DIREITOS DESTA APLICAÇÃO RESERVADOS AOS CRIADORES
require __DIR__ . '/../bootstrap.php';
$request = new Src\Request;

$router->resolve($request);

?>