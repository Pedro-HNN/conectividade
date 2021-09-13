Passo a Passo para configurar o ambiente

1 - Tenha instalado no servidor o PHP (8.0.3 ou maior) e o Composer (2.1.6 ou maior)

2 - Na pasta raiz do servidor apache faça o clone dos arquivos do gitlab

3 - Navgue com o cmd ou powhersell ate a pasta raiz da aplicação e rode o comando "composer install" e logo em seguido o comando "composer dump-load"

Esta aplicação contem um SDK para fazer a integração com a API do SERPRO que foi desenvolvida exclusivamente para a aplicação +Conectividade
Podendo ser disponibilizada posteriomente a data final do hackathon

4 - Navegue pelo cmd ou powershell ate a pasta raiz do SDK "aplicacao/sdki-api" e execute novamente os comandos
"composer install" e "composer dump-autoload"

=========================================================================

Configurando o Apache

1 - Procure dentro da pasta apache/conf do servidor e procure o arquifo "httpd.conf" e abra-o

2 - Dentro do arquivo procure o trecho parecido com esse
<Directory />
    AllowOverride Off
    Require all denied
</Directory>

3 - Mude a propriedade "AllowOverride" para "All", ficando parecido com o seguinte trecho
<Directory />
    AllowOverride All
    Require all denied
</Directory>

4 - Em seguide procure a seguinte linha
#LoadModule rewrite_module modules/mod_rewrite.so

5 - Retire o "#", fazendo a linha ser como esta
LoadModule rewrite_module modules/mod_rewrite.so

6 - Reinicie o Apache