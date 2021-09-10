<?

namespace org\gov\br\sdk;

use org\gov\br\sdk\service\BolsaFamiliaService;

class ControllerAPI {
    //SERVICES
    public $bolsaFamiliaService;
    public $AuxilioService;

    //CONFIG
    public $urlBase;
    public $chaveApi;

    public function __construct($urlBase = null, $chaveApi = null)
    {
        if($urlBase != null){
            $this->urlBase = $urlBase;
        }
        if($chaveApi != null){
            $this->chaveApi = $chaveApi;
        }

        $this->bolsaFamiliaService = new BolsaFamiliaService($urlBase, $chaveApi);
        
    }
}
