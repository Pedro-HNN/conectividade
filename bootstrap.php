<?php
 
error_reporting(E_ALL);
ini_set('display_errors', true);
 
require __DIR__ . '/vendor/autoload.php';
 
use Src\Router;
 
session_start();
 
 
try {
    $router = new Router;
    $_SESSION['apiSerpro']['url'] = 'http://api.portaldatransparencia.gov.br/api-de-dados';
    $_SESSION['apiSerpro']['chave'] = "ee62f3ebb1156b63a3fe831a8a4cbbba";
    require __DIR__ . '/routes/routes.php';
    
} catch(\Exception $e){
     
    echo $e->getMessage();
}