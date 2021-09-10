<?php

class Dados {
    public static $urlBase = 'http://api.portaldatransparencia.gov.br/api-de-dados';

    //Benifeciario por municipio
    public static $urlAuxBenMun = "/auxilio-emergencial-beneficiario-por-municipio";
    //CPF ou NIS
    public static $urlAuxCpfNis = "/auxilio-emergencial-por-cpf-ou-nis";
    //Por municipio
    public static $urlAuxMun = "/auxilio-emergencial-por-municipio";

    //Bolsa disponivel por CPF ou NIS
    public static $urlBolCpfNis = "/bolsa-familia-disponivel-por-cpf-ou-nis";
    //Bolsa por municipio
    public static $urlBolMun = "/bolsa-familia-por-municipio";
    //Parcelas sacadas por NIS
    public static $urlBolNis = "/bolsa-familia-sacado-por-nis";

    public static $chaveApi = "8ae17d0f18ead1a7a9aa64c681cafa98";
};