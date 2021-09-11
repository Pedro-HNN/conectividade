<?

session_start();
?>
<table class="table">
    <thead class="thead-dark">

        <tr>
            <th scope="col">Mes </th>
            <th scope="col">mes Referencia</th>
            <th scope="col">NIS </th>
            <th scope="col">CPF </th>
            <th scope="col">Valor </th>
            <th scope="col">Quantidade de Dependentes </th>


        </tr>
    </thead>
    <? if(isset($dadoAtual[0])){ ?>

    <td class="mesCompetencia"><? echo $dadoAtual[0]->dataMesCompetencia ?></td>
    <td class="mesReferencia"><? echo $dadoAtual[0]->dataMesReferencia ?></td>
    <td class="titular"><? echo $dadoAtual[0]->titularBolsaFamilia->nome ?></td>
    <td class="nis"><? echo $dadoAtual[0]->titularBolsaFamilia->nis ?></td>
    <td class="cpf"><? echo $dadoAtual[0]->titularBolsaFamilia->cpfFormatado ?></td>
    <td class="valor"><? echo $dadoAtual[0]->valor ?></td>
    <td class="qtdDependente"><? echo $dadoAtual[0]->quantidadeDependentes ?></td>
        <?
    }else{
    echo 'Nenhum dado encontrado';
    }
    ?>


    <tfoot>
        <tr>
            <th scope="col">Cidade / Municipio</th>
            <th scope="col">Nome do Beneficio</th>
            <th scope="col">Quantidade de Beneficiarios</th>
            <th scope="col">Valor Repassado</th>
        </tr>
    </tfoot>

    </tbody>
</table>
</div>
</div>


<form action="../controllers/controller.php" method="POST">
    <button value="submit">Pesquisar</button>
</form>