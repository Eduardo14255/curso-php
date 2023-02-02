<div class="titulo">Inserir Resgitro #01</div>

<?php

require_once "conexao.php";

$sql = "INSERT INTO cadastro
(nome, nascimento, email, site, filhos, salario)
VALUES (
    'Bruna',
    '2000-10-06',
    'Bruna@email.com.br',
    'https://Bruna.sites.com.br',
    0,
    000.00
)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if($resultado) {
    echo "Sucesso :)";
} else {
    echo "Erro: " . $conexao->error;
}
$conexao->close();