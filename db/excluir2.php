<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="titulo">Excluir Registros 2</div>

<?php
require_once "conexao.php";

$conexao = novaConexao();
$registros = [];

$sql = "SELECT * FROM cadastro";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $registros[] = $row;
    }
} elseif ($conexao->error) {
    echo "Erro: " . $conexao->error;
}
$conexao->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
    </thead>

    <tbody>
        <?php foreach ($registros as $registro) : ?>
            <tr>
                <td><?= $registro['nome'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= $registro['nascimento'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table > * {
        font-size:1.2rem ;
    }
</style>