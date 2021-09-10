<?php
session_start();
$dado = '[{"name":"Acre","nome":"Jose Fernandes Ferreira Lima","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/AC","email":"jose.flima@agricultura.gov.br","tel":"(68) 3218-1314"},{"name":"Alagoas","nome":"Carlos Artur Almeida Farias Ribeiro","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/AL","email":"carlos.farias@agricultura.gov.br","tel":"(82) 3215-4721"},{"name":"Amazonas","nome":"Maria do Céu Souza de Melo","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/AM","email":"maria.melo@agricultura.gov.br","tel":"(92) 3133-0072"},{"name":"Amapá","nome":"Clodoaldo Marques Rodrigues","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/AP","email":"clodoaldo.rodrigues@agricultura.gov.br","tel":"(96)3223-3075"},{"name":"Bahia","nome":"Rosiane Pereira Alves","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/BA","email":"rosiane.alves@agricultura.gov.br","tel":"(71) 3444-7445"},{"name":"Ceará","nome":"Clara Luzia Frota Figueira","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/CE","email":"clara.figueira@agricultura.gov.br","tel":"(85) 3455-9234"},{"name":"Espírito Santo","nome":"Adelina Edite Giacomin Rozalem","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/ES","email":"adeline.rozalem@agricultura.gov.br","tel":"(27) 3137-2718"},{"name":"Goiás","nome":"Gilson Nunes Dos Santos","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/GO","email":"gilson.santos@agricultura.gov.br","tel":"(62)3221-7229","n2":"Ilton dos Reis Pereira","c1":"Chefe de Seção - LFDA-GO","e2":"ilton.pereira@agricultura.gov.br","t2":"(31) 3660-9702","n3":"  "},{"name":"Maranhão","nome":"Marco Aurelio Macedo Dutra","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/MA","email":"marco.dutra@agricultura.gov.br","tel":"(98) 3131-3424"},{"name":"Minas Gerais","nome":"Rodrigo Monteiro Gonçalves","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/MG","email":"rodrigo.goncalves@agricultura.gov.br","tel":"(31) 3250-0325","n2":"Adriana Machado De Oliveira","c1":"Chefe de Seção - LFDA-MG","e2":"adriana.moliveira@agricultura.gov.br","t2":"(62) 3232-7211","n3":"  "},{"name":"Mato Grosso do Sul","nome":"Gerson Glienke","cargo":"Coordenador (a) de Administração - MS","email":"gerson.glienke@agricultura.gov.br","tel":"(67) 3041-9317"},{"name":"Mato Grosso","nome":"Lidiane Adriano Da Rocha","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/MT","email":"lidiane.rocha@agricultura.gov.br","tel":"(65) 3688-6716"},{"name":"Pará","nome":"Paulo Bastos Atan Filho","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/PA","email":"paulo.atan@agricultura.gov.br","tel":"(91) 3214-8670","n2":"Jonas Moreno Moraes Gonzaga","c1":"Chefe de Seção - LFDA-PA","e2":"jonas.gonzaga@agricultura.gov.br","t2":"(91) 3246-3411","n3":"  "},{"name":"Paraíba","nome":"Fernanda Teixeira De Carvalho - Coordenador","cargo":"Coordenadora de Administração - CAD","email":"fernanda.carvalho@agricultura.gov.br","tel":"(83) 3216-6303"},{"name":"Pernambuco","nome":"Antonio Henriques Lira Menezes","cargo":"Coordenador de Administração - CAD","email":"antonio.menezes@agricultura.gov.br","tel":"(81) 3236-8501"},{"name":"Piauí","nome":"Abrahao Lincoln de Araujo Mendes","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/PI","email":"abrahao.mendes@agricultura.gov.br","tel":"(86) 3301-4539"},{"name":"Paraná","nome":"Rosangela Buttner Setlik ","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/PB","email":"rosangela.setlik@agricultura.gov.br","tel":"(41) 3361-4004"},{"name":"Rio de Janeiro","nome":"Raquel Teixeira Silva","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/RJ","email":"raquel.silva@agricultura.gov.br","tel":"(21) 2291-9412"},{"name":"Rio Grande do Norte","nome":"Edivaldo Jose Souza de Andrade","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/RN","email":"edivaldo.andrade@agricultura.gov.br","tel":"(86) 4004-9706"},{"name":"Rondônia","nome":"Antônio Vagne Silva Costa","cargo":"Coordenador de Administração - CAD","email":"antonio.vagne@agricultura.gov.br","tel":"(69)3901-5627"},{"name":"Roraima","nome":"Samuel Almeida De Sousa","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/RR","email":"samuel.sousa@agricultura.gov.br","tel":"(95) 3623-0811"},{"name":"Rio Grande do Sul","nome":"Jose Ricardo De Matos","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/RS","email":"jose.cunha@agricultura.gov.br","tel":"(51)3284-9544","n2":"Jean Alberto Gelain","c1":"Chefe de Seção - LFDA-RS","e2":"sgp.lfda-rs@agricultura.gov.br","t2":"(51) 3248.1926","n3":"  "},{"name":"Santa Catarina","nome":"Samuel Lemos Moura Bonifacio da Silva ","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/SC","email":"samuel.sousa@agricultura.gov.br","tel":"(48) 3261-9940"},{"name":"Sergipe","nome":"Jose Ronaldo Da Silva Santos","cargo":"Coordenador de Administração - CAD","email":"jose.rsantos@agricultura.gov.br","tel":"(79)3205-4927"},{"name":"São Paulo","nome":"Solange Aparecida Tomaz","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/SP","email":"solange.tomaz@agricultura.gov.br","tel":"(11) 3251-1716","n2":"Bruno Rosário Braga","c1":"Chefe de Seção - LFDA-SP","e2":"sgp.lfda-sp@agricultura.gov.br","t2":"(19) 3254-2329","n3":"  "},{"name":"Tocantins","nome":"Danyllo Wilkerson Portilho","cargo":"Chefe do Serviço de Gestão de Pessoas - SEGP/TO","email":"danyllo.maciel@agricultura.gov.br","tel":"(63)3219-4315/4311"},{"name":"Distrito Federal","nome":"Augusto Cesar Cunha Coelho","cargo":"Chefe de Serviço da Folha de Pagamento - SEPAG","email":"augusto.coelho@agricultura.gov.br","tel":"(61)3218-3667","n2":"Anna Carolina Neves Martins","c1":"Chefe da Divisão de Cadastro - DICAD","e2":"anna.rodrigues@agricultura.gov.br","t2":"(61)3218-2263","n3":"INMET"}]';
$dado = json_decode($dado, true);
?>

<html>

<head>
</head>

<body>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
        google.charts.load('current', { 'packages': ['geochart'] });
        google.charts.setOnLoadCallback(drawRegionsMap);


        /* Array com as informações; */
        var infos = [
  
  {
name: "Acre",
nome:"Jose Fernandes Ferreira Lima",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/AC",
email:"jose.flima@agricultura.gov.br",
tel: "(68) 3218-1314"
  },
  {
name: "Alagoas",
nome:"Carlos Artur Almeida Farias Ribeiro",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/AL",
email:"carlos.farias@agricultura.gov.br",
tel: "(82) 3215-4721"

  },
  {
      name: "Amazonas",
      nome:"Maria do Céu Souza de Melo",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/AM",
      email:"maria.melo@agricultura.gov.br",
      tel: "(92) 3133-0072"
  },
  {
      name: "Amapá",
      nome:"Clodoaldo Marques Rodrigues",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/AP",
      email:"clodoaldo.rodrigues@agricultura.gov.br",
      tel: "(96)3223-3075"
      
  },
  {
      name: "Bahia",
      nome:"Rosiane Pereira Alves",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/BA",
      email:"rosiane.alves@agricultura.gov.br",
      tel:"(71) 3444-7445"
  },
  {
      name: "Ceará",
      nome:"Clara Luzia Frota Figueira",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/CE",
      email:"clara.figueira@agricultura.gov.br"
      ,tel:"(85) 3455-9234"
  },
  {
      name: "Espírito Santo",
      nome:"Adelina Edite Giacomin Rozalem",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/ES",
      email:"adeline.rozalem@agricultura.gov.br"
      ,tel:"(27) 3137-2718"},
  {
      name: "Goiás",
      nome:"Gilson Nunes Dos Santos",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/GO",
      email:"gilson.santos@agricultura.gov.br"
      ,tel:"(62)3221-7229",
      n2:"Ilton dos Reis Pereira",
      c1:"Chefe de Seção - LFDA-GO",
      e2:"ilton.pereira@agricultura.gov.br",
      t2:"(31) 3660-9702",
n3:"  "
  }
,            {
      name: "Maranhão",
      nome:"Marco Aurelio Macedo Dutra",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/MA",
      email:"marco.dutra@agricultura.gov.br"
      ,tel:"(98) 3131-3424"
  },
  {
      name: "Minas Gerais",
      nome:"Rodrigo Monteiro Gonçalves",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/MG",
      email:"rodrigo.goncalves@agricultura.gov.br"
      ,tel:"(31) 3250-0325",
      n2:"Adriana Machado De Oliveira",
      c1:"Chefe de Seção - LFDA-MG",
      e2:"adriana.moliveira@agricultura.gov.br",
      t2:"(62) 3232-7211",
n3:"  "

  },
  {
      name: "Mato Grosso do Sul",
      nome:"Gerson Glienke",
      cargo:"Coordenador (a) de Administração - MS",
      email:"gerson.glienke@agricultura.gov.br"
      ,tel:"(67) 3041-9317"

  },
  {
      name: "Mato Grosso",
      nome:"Lidiane Adriano Da Rocha",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/MT",
      email:"lidiane.rocha@agricultura.gov.br"
      ,tel:"(65) 3688-6716"
  },        
  {
      name: "Pará",
      nome:"Paulo Bastos Atan Filho",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/PA",
      email:"paulo.atan@agricultura.gov.br"
      ,tel:"(91) 3214-8670",
      n2:"Jonas Moreno Moraes Gonzaga",
      c1:"Chefe de Seção - LFDA-PA",
      e2:"jonas.gonzaga@agricultura.gov.br",
      t2:"(91) 3246-3411",
n3:"  "

  },
  {
      name: "Paraíba",
      nome:"Fernanda Teixeira De Carvalho - Coordenador",
      cargo:"Coordenadora de Administração - CAD",
      email:"fernanda.carvalho@agricultura.gov.br"
      ,tel:"(83) 3216-6303"

  },
  {
name: "Pernambuco",
      nome:"Antonio Henriques Lira Menezes",
      cargo:"Coordenador de Administração - CAD",          
      email:"antonio.menezes@agricultura.gov.br"
     ,tel:"(81) 3236-8501",
  },
  {
name: "Piauí",
nome:"Abrahao Lincoln de Araujo Mendes",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/PI",
      email:"abrahao.mendes@agricultura.gov.br"
      ,tel:"(86) 3301-4539"

  },
  {
name: "Paraná",
nome:"Rosangela Buttner Setlik ",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/PB",
      email:"rosangela.setlik@agricultura.gov.br"
,tel:"(41) 3361-4004"
  },
  {
 name: "Rio de Janeiro",
 nome:"Raquel Teixeira Silva",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/RJ",
      email:"raquel.silva@agricultura.gov.br"
      ,tel:"(21) 2291-9412"

  },
  {
      name: "Rio Grande do Norte",
      nome:"Edivaldo Jose Souza de Andrade",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/RN",
      email:"edivaldo.andrade@agricultura.gov.br"
      ,tel:"(86) 4004-9706"

  },
  {
      name: "Rondônia",
      nome:"Antônio Vagne Silva Costa",
      cargo:"Coordenador de Administração - CAD",
      email:"antonio.vagne@agricultura.gov.br"
      ,tel:"(69)3901-5627"

  },
  {
      name: "Roraima",
      nome:"Samuel Almeida De Sousa",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/RR",
      email:"samuel.sousa@agricultura.gov.br"
      ,tel:"(95) 3623-0811"

  },
  {
      name: "Rio Grande do Sul",
      nome:"Jose Ricardo De Matos",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/RS",
      email:"jose.cunha@agricultura.gov.br"
      ,tel:"(51)3284-9544",
      n2:"Jean Alberto Gelain",
      c1:"Chefe de Seção - LFDA-RS",
      e2:"sgp.lfda-rs@agricultura.gov.br",
      t2:"(51) 3248.1926",
n3:"  "


  },
  {
      name: "Santa Catarina",
      nome:"Samuel Lemos Moura Bonifacio da Silva ",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/SC",
      email:"samuel.sousa@agricultura.gov.br"
      ,tel:"(48) 3261-9940"

  },
  {
      name: "Sergipe",
      nome:"Jose Ronaldo Da Silva Santos",
      cargo:"Coordenador de Administração - CAD",
      email:"jose.rsantos@agricultura.gov.br"
      ,tel:"(79)3205-4927"

  },
  {
      name: "São Paulo",
      nome:"Solange Aparecida Tomaz",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/SP",
      email:"solange.tomaz@agricultura.gov.br"
      ,tel:"(11) 3251-1716",
      n2:"Bruno Rosário Braga",
      c1:"Chefe de Seção - LFDA-SP",
      e2:"sgp.lfda-sp@agricultura.gov.br",
      t2:"(19) 3254-2329",
n3:"  "

  },
  {
      name: "Tocantins",
      nome:"Danyllo Wilkerson Portilho",
cargo:"Chefe do Serviço de Gestão de Pessoas - SEGP/TO",
      email:"danyllo.maciel@agricultura.gov.br"
      ,tel:"(63)3219-4315/4311"

  },
  {
      name: "Distrito Federal",
      nome:"Augusto Cesar Cunha Coelho",
     cargo:"Chefe de Serviço da Folha de Pagamento - SEPAG",
      email:"augusto.coelho@agricultura.gov.br"
      ,tel:"(61)3218-3667",
      n2:"Anna Carolina Neves Martins",
      c1:"Chefe da Divisão de Cadastro - DICAD",
      e2:"anna.rodrigues@agricultura.gov.br",
      t2:"(61)3218-2263",
      n3:"INMET"


  }         
]

        function drawRegionsMap() {

            let data = google.visualization.arrayToDataTable([
                ['Country', 'Popularity'],
                ['BR-DF', 'Distrito Federal'],
                ['BR-AC', 'Acre'],
                ['BR-AL', 'Alagoas'],
                ['BR-AP', 'Amapá'],
                ['BR-AM', 'Amazonas'],
                ['BR-BA', 'Bahia'],
                ['BR-CE', 'Ceará'],
                ['BR-ES', 'Espírito Santo'],
                ['BR-GO', 'Goiás'],
                ['BR-MA', 'Maranhão'],
                ['BR-MT', 'Mato Grosso'],
                ['BR-MS', 'Mato Grosso do Sul'],
                ['BR-MG', 'Minas Gerais'],
                ['BR-PA', 'Pará'],
                ['BR-PB', 'Paraíba'],
                ['BR-PR', 'Paraná'],
                ['BR-PE', 'Pernambuco'],
                ['BR-PI', 'Piauí'],
                ['BR-RJ', 'Rio de Janeiro'],
                ['BR-RN', 'Rio Grande do Norte'],
                ['BR-RS', 'Rio Grande do Sul'],
                ['BR-RO', 'Rondônia'],
                ['BR-RR', 'Roraima'],
                ['BR-SC', 'Santa Catarina'],
                ['BR-SP', 'São Paulo'],
                ['BR-SE', 'Sergipe'],
                ['BR-TO', 'Tocantins']

            ]);

            var options = {
                region: 'BR',
                resolution: 'provinces',
                datalessRegionColor: '#f5f5f5',
                defaultColor: '#00853f'
            };

            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

            google.visualization.events.addListener(chart, 'select', function () {
                var selection = chart.getSelection();
                if (typeof selection[0] !== "") {
                    //Filtro para o estado selecionado
                    var value = infos.filter(e => e.name === data.getValue(selection[0].row, 1))[0];
                    //renderização dos elementos com a informação desejada

                    //Caso haja muitas informações utilizar esse Card

                    if (value.name == "Distrito Federal" || value.name == "Goiás" || value.name == "Minas Gerais" || value.name == "Pará" || value.name == "Rio Grande do Sul" || value.name == "São Paulo") {
                        document.getElementById("state-info").innerHTML = `<h3>${value.name}</h3> <p class="nome">${value.nome}</p> <p class="n1">${value.cargo}</p> <p class="n1">E-mail: ${value.email}</p>  <p class="n1">Telefone: ${value.tel}</p>  <p class="nome">${value.n2}</p><p class="n1">${value.c1}</p> <p class="n1">E-mail: ${value.e2}</p>  <p class="n1">Telefone: ${value.t2}</p> <a href="http://agronet.agricultura.gov.br/coordenacao-geral-de-gestao-de-pessoas-cogep/inmet">${value.n3}</a> `
                    }

                    // Se não houver tantas informações utilize esse

                    else {
                        <?php $_SESSION['dadoAtual'] = $dado[26]; require 'views/card.php'; ?>
                    }
                }
            });

            chart.draw(data, options);
        }
    </script>

    <style>
        /* Especificações do Mapa */
        .map-container {
            display: flex;
            margin: 0;
            padding: 0;
            justify-content: center;
        }

        /* Padrão do carde*/
        #state-info {
            background: #FFF;
            /* Fundo Branco */
            box-shadow: 0px 4px 20px silver;
            /* Sombra Cinza */
            border-radius: 10px;
            /* Borda arredondada */
            width: 500;
            /* Tamanho */
            height: 400px;
            padding: 10px;
            margin-left: 10px;
        }


        /* Padrão de nome */
        p,
        h1,
        h3 {
            font-family: 'Open sans', sans-serif;
            /* Fonte */
        }

        .nome {
            color: green;
            /* Cor do Nome */
            font-size: 19px;
            /* Tamanho da Fonte */
        }

        .n1 {
            font-weight: 600;
            font-size: 15px;
        }

        body {
            margin: 0;
            padding: 0;
        }
    </style>



    <div class="map-container">
        <div id="regions_div" style="width: 800px; height: 550px; border-radius: 80px;"></div>
        <div id="state-info">
        </div>
    </div>



</body>

</html>