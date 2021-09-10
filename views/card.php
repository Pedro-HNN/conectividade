<?php

session_start();

?>
<h3><?php $_SESSION['dadoAtual']['name'] ?></h3> 
<p class="nome"><?php $_SESSION['dadoAtual']['nome'] ?></p> 
<p class="n1"><?php $_SESSION['dadoAtual']['cargo'] ?></p> 
<p class="n1"><?php $_SESSION['dadoAtual']['email'] ?></p>  
<p class="n1"><?php $_SESSION['dadoAtual']['tel'] ?></p>