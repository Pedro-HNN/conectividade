<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackathon</title>
</head>
<?php
session_start();

$servidor = "bd.inova.serpro.gov.br";
$port = 5432;
$user = "equipe18";
$password = "a5966190ed6aa38563cd4ac5c05deec7";

$conexao = pg_connect(@"host={$servidor} port={$port} dbname=postgres user={$user} password={$password}") or die();

$sql = @"select * from equipe18";

$result = pg_query($conexao, $sql);
while ($row = pg_fetch_array($result)) {
    var_dump($row);
  }
?>
<?php include_once 'views/header.html' ?>

<body>
    <form action="controllers/controller.php" method="GET">
        <input type="text" name="acao" />
        <button type="submit">enviar</button>
        <h3>
            <?php var_dump($_SESSION) ?>
        </h3>
    </form>
</body>
<script>
    window.onload(() => {

    })
</script>

</html>