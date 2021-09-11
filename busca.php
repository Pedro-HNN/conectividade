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
 
</head>
<body>
<?php include_once './views/models/header.html' ?>

<form action="" method="POST">
    <input type="text" placeholder="Mes Referencia" name="mes">
    <input type="text" placeholder="CPF titular" name="cpf">
    <button value="submit">Pesquisar</button>
</form>

<h1>#TODO: FAZER SISTEMA DE BUSCA AQUI DO BOLSA E DO AUXILIO</h1>
<h1>#TODO: FAZER RESULTADOS APARECEREM AQUI</h1>
<h2>usar consultarAuxilioNis e consultarBolsaCpfNis, ambos estão na apiDocumentacao.php</h2>

<?php include_once './views/models/footer.html' ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</html>