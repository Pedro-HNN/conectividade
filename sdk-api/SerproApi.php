<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';
use org\gov\br\sdk\ControllerAPI;
use org\gov\br\sdk\entity\request\AuxilioMunicipioRequest;

class SerproApi{

    private $apiService;

    public function __construct($url, $chave){
        if(!isset($this->apiService)){
            $this->apiService = new ControllerAPI($url, $chave);
        }    
    }

    public function consultarAuxilicioMunicipio($codigoIbge, $mesAno, $pagina){
        $auxilioMunicipioRequest = new AuxilioMunicipioRequest();
        $auxilioMunicipioRequest->setCodigoIbge($codigoIbge);
        $auxilioMunicipioRequest->setMesAno($mesAno);
        $auxilioMunicipioRequest->setPagina($pagina);

        $response = $this->apiService->auxilioService->consultarAuxilioMunicipio($auxilioMunicipioRequest);
        return $response;
    }

    public function teste(){
        echo(dirname(__FILE__));
    }
}