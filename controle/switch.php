<div class="titulo">Switch</div>
<?php
$categoria = 'asasasa';
$preco = 0.0;
$carro = '';
if ($categoria === 'Luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} elseif ($categoria === 'SUV') {
    $carro = 'Reegade';
    $preçco = 80000;
} else if ($categoria === 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";

$categoria = 'Luxo';
switch (strtolower($categoria)) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 2500000;
        break;
    case 'suv':
    case 'suv Basico':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    case 'sedan':
        $carro = 'Etios';
        $preco = 55000;
    default:
        $carro = 'Mobi';
        $preco = 33000;
        break;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "<p>Carro: $carro<br>Preço: R$ $precoFormatado</p>";