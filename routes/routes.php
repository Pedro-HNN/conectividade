<?php

$router->get('/', function(){
    require '../views/default.html';
});

//Endpoints Bolsa Familia
$router->get('/consulta/bolsa/municipio', function(){
    
});

$router->get('/consulta/bolsa/cpf-nis', function(){
    
});

$router->get('/consulta/bolsa/parcela-nis', function(){
    
});

//Endpoinst Auxilio Emergencial
$router->get('/consulta/auxilio/benifeciario-municipio', function(){
    
});

$router->get('/consulta/auxilio/nis', function(){
    
});

$router->get('/consulta/auxilio/municipio', function(){
    
});