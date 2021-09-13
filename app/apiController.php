<?

namespace App;

require '../sdk-api/SerproApi.php';

use SerproApi;

class ApiController {

    //BolsaFamilia
    function consultarBolsaMunicipio($codigoIbge, $mesAno, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarBolsaMunicipio($codigoIbge, $mesAno, $pagina);
        return $result;
    }

    function consultarBolsaCpfNis($anoMesCompetencia, $anoMesRefencia, $codigo, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarBolsaCpfNis($anoMesCompetencia, $anoMesRefencia, $codigo, $pagina);
        return $result;
    }

    function consultarBolsaSaqueNis($anoMesCompetencia, $anoMesRefencia, $codigo, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarBolsaParcelaSacadaNis($anoMesCompetencia, $anoMesRefencia, $codigo, $pagina);
        return $result;
    }

    //Auxilo
    function consultarAuxilioMunicipio($codigoIbge, $mesAno, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarAuxilioMunicipio($codigoIbge, $mesAno, $pagina);
        return $result;
    }

    function consultarAuxilioNis($codigoBenifeciario, $codigoResponsavelFamiliar, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarAuxilioNis($codigoBenifeciario, $codigoResponsavelFamiliar, $pagina);
        return $result;
    }

    function consultarAuxiliobenifeciarioMunicipio($codigoIbge, $mesAno, $pagina){
        $apiSerpro = new SerproApi($_SESSION['apiSerpro']['url'], $_SESSION['apiSerpro']['chave']);
        $result = $apiSerpro->consultarAuxiliobenifeciarioMunicipio($codigoIbge, $mesAno, $pagina);
        return $result;
    }
}