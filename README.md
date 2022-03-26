## Passo a Passo para configurar o ambiente

1. Tenha instalado no servidor o PHP (8.0.3 ou maior) e o Composer (2.1.6 ou maior)

2. Na pasta raiz do servidor apache faça o clone dos arquivos do gitlab

3. Navgue com o cmd ou powhersell ate a pasta raiz da aplicação e rode o comando `"composer install"` e logo em seguido o comando `"composer dump-load"`

Esta aplicação contem um SDK para fazer a integração com a API do SERPRO que foi desenvolvida exclusivamente para a aplicação +Conectividade. Podendo ser disponibilizada posteriomente a data final do hackathon.

4. Navegue pelo cmd ou powershell ate a pasta raiz do SDK `"aplicacao/sdki-api"` e execute novamente os comandos
"composer install" e `"composer dump-autoload"`

---

### Configurando o Apache

1. Procure dentro da pasta apache/conf do servidor e procure o arquifo "httpd.conf" e abra-o

2. Dentro do arquivo procure o trecho parecido com esse
		
		<Directory/>
		        AllowOverride Off
		        Require all denied
		</Directory>

3. Mude a propriedade `"AllowOverride"` para `"All"`, ficando parecido com o seguinte trecho

	    <Directory />
	        AllowOverride All
	        Require all denied
	    </Directory>

4. Em seguide procure a seguinte linha

	    #LoadModule rewrite_module modules/mod_rewrite.so

5. Retire o `"#"`, fazendo a linha ser como esta

	    LoadModule rewrite_module modules/mod_rewrite.so

6. Reinicie o Apache

---

### Documentação do SDK

    <?php
    //Carregar a classe da API
    require 'sdk-api/SerproApi.php';
    
    //Intancializar a classe com a URL base e a chave da API
    $serpro = new SerproApi('{URL base}', {chave de acesso da API, obtida pelo GOV.BR});
    
    //Metodo de consulta da bolsa familia por CPF ou NIS
    //Params = 1-AnoMesCompetencia; 2-AnoMesReferencia; 3-CPF ou NIS; 4-Pagina
    $result = $serpro->consultarBolsaCpfNis("0000000","000000000000","0000000000","1");
    
    
    //Metodo de consulta da bolsa familia por municipio
    //Params = 1-CodigoIbge; 2-mesAno; 3-pagina
    $result = $serpro->consultarBolsaMunicipio("00000000","000000000","1");
    
    //Metodo de consulta das parcelas sacadas da bolsa familia por NIS
    //Params = 1-AnoMesCompetencia; 2-AnoMesReferencia; 3-NIS; 4-Pagina
    $result = $serpro->consultarBolsaCpfNis("0000","00000000","0000000000","1");
    
    //Metodo de consulta de benifeciario do auxilio por municipio
    //Params = 1-codigoIbge; 2-mesAno; 3-pagina
    $result = $serpro->consultarAuxilioBenifeciarioMunicipio("000000", "00000000000","1");
    
    //Metodo de consulta de benifeciario do auxilio por NIS
    //Params = 1-NISBenifeciario; 2-NISResponsavelFamiliar; 3-pagina
    $result = $serpro->consultarAuxilioNis("00000", "00000000","1");
    
    //Metodo de consulta dos dados do auxilio por municipio
    //Params = 1-codigoIbge; 2-mesAno; 3-pagina
    $result = $serpro->consultarAuxilioBenifeciarioMunicipio("00000000", "00000000","1");
