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
?>
<body>
    <form action="controllers/controller.php" method="GET">
        <input type="text" name="acao"/>
        <button type="submit">enviar</button>
        <h3>
            <?php var_dump($_SESSION)?>
        </h3>
    </form>
</body>
<script>
window.onload(()=>{

})
</script>
</html>