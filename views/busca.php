<!DOCTYPE html>
<html lang="pt-br" >
<head>
<meta charset="UTF-8">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>
	body{
	    font-family: Verdana !important;
	}

</style> 
<html lang="pt-br">
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/js/bootstrap-datepicker.min.js"></script>
    <link   href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css" rel="stylesheet">

    <link href="style/style.css" rel="stylesheet">
    <script src="validar.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hakton!</title>
</head>
<body>
<?php include_once './views/models/header.html' ?>
<div class="container-fluid navbar-custom d-flex flex-column justify-content-center align-items-center">
        <nav class="navbar navbar-expand-sm navbar-dark navbar-custom">

            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-lablel="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            

        </nav>
    </div>

    <form>
    <div class="container d-flex flex-column justify-content-center align-items-center">
        
        <div class="mb-4">
        <h5>Consulte aqui o seu estado na bolsa familia e auxilio emergencial</h5>
        </div>
    
        <div class="col-md-4 mb-4">

            <label>Escolha o mês e o ano:</label>
            <input  type="text" class="form-control col-xs-2 border border-primary" autocomplete="off" name="datepicker" id="data" placeholder="Selecione a data desejada:" size="3"/>


            <script>var dp=$("#data").datepicker( {
                format: "mm-yyyy",
                startView: "months", 
                minViewMode: "months",
                startDate : new Date('2020-04-1'),
                endDate : new Date('2021-07-1')

            });

            </script>
        </div>

        <div class="col-md-4 mb-4">
            <label>Digite seu CPF:</label>
            <input  oninput="mascara(this)" autocomplete="off" type="text" maxlength="14" class="form-control border border-primary"  placeholder="Seu CPF:" name="cpf" id="cpf">
            <small class="form-text text-muted">Nunca vamos compartilhar seu cpf, com ninguém.</small>
        </div>

  
        <button class="btn btn-primary" onclick="return valida_form(this)">
        Pesquisar
        </button>

        </form>
    </div>

    <div class="text-center p-3 fixed-bottom footer-custom" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-dark" href="">Linuxverse</a>
    </div>







<?php include_once './views/models/footer.html' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>