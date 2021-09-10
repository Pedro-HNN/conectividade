<?php

class Dados {
    public $urlBase = 'http://api.portaldatransparencia.gov.br/api-de-dados';

    //Benifeciario por municipio
    public $urlAuxBenMun = "/auxilio-emergencial-beneficiario-por-municipio";
    //CPF ou NIS
    public $urlAuxCpfNis = "/auxilio-emergencial-por-cpf-ou-nis";
    //Por municipio
    public $urlAuxMun = "/auxilio-emergencial-por-municipio";

    //Bolsa disponivel por CPF ou NIS
    public $urlBolCpfNis = "/bolsa-familia-disponivel-por-cpf-ou-nis";
    //Bolsa por municipio
    public $urlBolMun = "/bolsa-familia-por-municipio";
    //Parcelas sacadas por NIS
    public $urlBolNis = "/bolsa-familia-sacado-por-nis";

    public $chaveApi = "8ae17d0f18ead1a7a9aa64c681cafa98";
};