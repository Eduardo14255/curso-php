<div class="titulo">Operadores ternarios</div>

<?php
$idade = 70;
$status;

if ($idade >= 18){
    $status = 'Maior de Idade';
}else {
    $status = 'Menor de Idade';
}

echo "$status<br>";

$idade = 17;
$status = $idade >= 18 ? 'Maior de Idade' : 'Menor de Idade';
echo "$status<br>";