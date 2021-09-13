<!DOCTYPE html>
<html lang="pt-br">

<head>
<<<<<<< HEAD
    <meta charset="UTF-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../views/style/style.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hakton!</title>
=======
<meta charset="UTF-8">
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <link   href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
    <link   href="style/style.css" rel="stylesheet">
     <link rel="stylesheet" href="../views/style/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/2.3.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <script src="validar.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>+Conectividade</title>
    	<style>
    * {
      margin: 0;
      padding: 0;
    }

    html,
    body {
      height: 100%;
    }
    .container{
      margin-top: 20px;
      min-height: 58%;
    }

    .custom-col {
      margin-bottom: 20px;
    }


    
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        opacity: 1; /* Firefox */
    }

  </style>
>>>>>>> 75ae75173271efdfb4824ab8031d938f224ec8c9
</head>


<body>
<<<<<<< HEAD
    <div class="container-fluid navbar-custom d-flex flex-column justify-content-center align-items-center">
        <nav class="navbar navbar-expand-sm navbar-dark navbar-custom">

            <div class="collapse navbar-collapse" id="toggleMobileMenu">
                <ul class="navbar-nav ms-auto text-center">
                    <li><a class="nav-link text-white" href="./mapa.php">Mapa</a></li>
                    <li><a class="nav-link text-white" href="./busca.php">Consulte seu bolsa família</a></li>
                    <li><a class="nav-link text-white" href="./auxilio.php">Consulte seu Auxílio Emergencial</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container d-flex flex-column justify-content-center align-items-center">

        <div class="mb-4">
            <h5>Consulte aqui o sua Bolsa Família</h5>
        </div>

        <div class="col-md-4 mb-4">

            <label>Escolha o mês e o ano:</label>
            <input type="text" class="form-select border border-primary" autocomplete="off" name="datepicker" id="data" placeholder="Selecione a data desejada:" size="3" />


            <script>
                var dp = $("#data").datepicker({
                    format: "mm-yyyy",
                    startView: "months",
                    minViewMode: "months",
                    startDate: new Date('2020-04-1'),
                    endDate: new Date('2021-07-1')

                });
            </script>
        </div>

        <div class="col-md-4 mb-4">

            <label>Escolha o mês e o ano:</label>
            <input type="text" class="form-select border border-primary" autocomplete="off" name="datepicker" id="data2" placeholder="Selecione a data desejada:" size="3" />


            <script>
                var dp = $("#data2").datepicker({
                    format: "mm-yyyy",
                    startView: "months",
                    minViewMode: "months",
                    startDate: new Date('2020-04-1'),
                    endDate: new Date('2021-07-1')

                });
            </script>
        </div>



        <div class="col-md-4 mb-4">
            <label>Digite seu CPF:</label>
            <input id="cpf" name="cpf" autocomplete="off" type="text" maxlength="14" class="form-control border border-primary" placeholder="Seu CPF:">
            <small class="form-text text-muted">Nunca vamos compartilhar seu cpf, com ninguém.</small>
        </div>




        <button class="btn btn-primary button-submit" onclick="return valida_form(this)">
            Pesquisar
        </button>

    </div>

    <div class="text-center p-3 fixed-bottom footer-custom" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-dark" href="">Linuxverse</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="../scripts/script.js"></script>
<script>
    $("#formulario").change(event => {
        AnoMesCompetencia = $('#data').val()
        AnoMesReferencia = $('#data2').val()
        cpf = $('#cpf').val()
        bolsaCpfNisAjax(AnoMesCompetencia, AnoMesReferencia, cpf, pagina = 1)
    })
=======

	<?php include_once 'header.html' ?>

	<div class="container">
		<div class="row">
    		<div class="col-md-6">
    			<div id="pesquisa-bolsa" align="center">
    			<div class="card custom-card shadow p-2 mb-5 bg-white rounded h-100" style="max-width: 25rem; border-color: #0094d9;">
          			<div class="card-body text-dark ">
            			<h5 class="card-title">Pesquise aqui sua situação do Bolsa Família!</h5>
            			<hr />
            			<div class="form-group">
                            <input type="text" class="btn btn-lg" id="cpf-bolsa" placeholder="Digite seu CPF!" style="background-color: #0094d9;border-color: #0094d9; color:#ffffff;" />
                            <input type="text" class="btn btn-lg datepicker" name="datepicker" id="datepickerCompetencia" placeholder="Mês Competência" style="background-color: #0094d9;border-color: #0094d9; color:#ffffff;margin-top:5px;" />
          					<button id="btn-consultar" class="btn btn-sm shadow p-4 lg-5 rounded" value="submit" style="background-color: #0094d9;border-color:#0094d9;margin-top:5px;color:#ffffff;">Consultar</button>
  						</div>
          			</div>
    			</div>
    		</div>
    		
    		</div>
			<div class="col-md-6">
			<div id="pesquisa-bolsa" align="center">
    			<div class="card custom-card shadow p-2 mb-5 bg-white rounded h-100" style="max-width: 25rem; border-color: #0094d9;">
          			<div class="card-body text-dark ">
            			<h5 class="card-title">Pesquise aqui sua situação do Auxilio Emergencial!</h5>
            			<hr />
            			<div class="form-group">
                            <input type="text" class="btn btn-lg " id="nis-auxilio" placeholder="NIS do Beneficiário!" style="background-color: #0094d9;border-color: #0094d9; color:#ffffff;" />
                           	<input type="text" class="btn btn-lg " id="nis-auxilio" placeholder="NIS do Responsável!" style="background-color: #0094d9;border-color: #0094d9; color:#ffffff;margin-top:5px;" />
                           	<button id="btn-consultar" class="btn btn-sm shadow p-4 lg-5 rounded" value="submit" style="background-color: #0094d9;border-color:#0094d9;margin-top:5px;color:#ffffff;">Consultar</button>
  						</div>
          			</div>
    			</div>
    		</div>
			
			</div>
		</div>
		
		<div class="row" >
			<div class-"col-md-6">
				<div align="center"class="card text-dark shadow p-3 mb-5 bg-white rounded" style="max-width: 25rem;margin-top:20px;border-color:#0094d9;">
    				<div id="bolsa-info">
    				<div ></div>
    				
    				</div>
    			</div>
			</div>
			
			<div class-"col-md-6">
    			<div align="center"class="card text-dark shadow p-3 mb-5 bg-white rounded" style="max-width: 25rem;margin-top:20px;border-color:#0094d9;">
    				<div id="auxilio-info"></div>
    			</div>
			</div>
		</div>
	</div>

    <?php include_once 'footer.html' ?>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="../scripts/script.js"></script>

<script>
  $(".datepicker").datepicker({
    format: "mm/yyyy",
    startView: "months",
    minViewMode: "months",
    startDate: new Date('2013-01-20'),
    endDate: new Date('2021-08-1')
  });

  $('#selEstados').change((a,b,c)=>{console.log(a,b,c)})

  montarSelectEstados()

  window.onload = ()=>{console.log('a')}
  alert(window.onload)
</script>
<script>
  $("#formulario").change(event =>{
		AnoMesCompetencia = $('#data').val()
		AnoMesReferencia = $('#data2').val()
        cpf = $('#cpf').val()
		bolsaCPFNISAJAX(AnoMesCompetencia, AnoMesReferencia, cpf, pagina = 1)
  })

>>>>>>> 75ae75173271efdfb4824ab8031d938f224ec8c9
</script>


</html>