<div class="titulo">Desafio Tabela 02</div>

<form action="#" method="POST">
    <div>
        <label for="linha">Linhas</label>
        <input type="number" name="linha" value="10" id="linha" placeholder="linha">
    </div>
    <div>
        <label for="coluna">Colunas</label>
        <input type="number" name="coluna" value="10" id="coluna" placeholder="coluna">
    </div>
    <button>Gerar Tabela</button>
</form>

<table>
    <?php
    $linha = intval($_POST['linha']);
    $coluna = intval($_POST['coluna']);

    if (!$linha) $linha = 10;
    if (!$coluna) $coluna = 10;

    $num = 1;
    for ($i = 0; $i < $linha; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $coluna; $j++) {
            echo "<td>$num</num>";
            $num++;
        }
        echo '</tr>';
    }
    ?>
</table>
<style>
    form>* {
        font-size: 1.8rem;
    }

    form>div {
        margin-bottom: 10px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }
</style>