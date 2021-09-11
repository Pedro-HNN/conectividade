<?

session_start();
$dadoAtual = $_SESSION['ultimoValor'];
if(isset($dadoAtual[0])){
?>
<div style="display: flex; flex-direction:column;">
    <div class="mesCompetencia"><?echo $dadoAtual[0]->dataMesCompetencia?></div>
    <div class="mesReferencia"><?echo $dadoAtual[0]->dataMesReferencia?></div>
    <div class="titular"><?echo $dadoAtual[0]->titularBolsaFamilia->nome?></div>
    <div class="nis"><?echo $dadoAtual[0]->titularBolsaFamilia->nis?></div>
    <div class="cpf"><?echo $dadoAtual[0]->titularBolsaFamilia->cpfFormatado?></div>
    <div class="valor"><?echo $dadoAtual[0]->valor?></div>
    <div class="qtdDependente"><?echo $dadoAtual[0]->quantidadeDependentes?></div>
</div>
<?
}else{
    echo 'Nenhum dado encontrado';
}
?>

<form action="../controllers/controller.php" method="POST">
    <input type="text" placeholder="Mes Referencia" name="mes">
    <input type="text" placeholder="CPF titular" name="cpf">
    <button value="submit">Pesquisar</button>
</form>