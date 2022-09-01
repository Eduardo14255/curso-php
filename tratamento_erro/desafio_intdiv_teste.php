<div class="titulo">Desafio Intdiv</div>

<?php
require_once 'desafio_intdiv.php';
use function \Aritmetica\intdiv;

try {
    echo intdiv(8, 3) . '<br>';
} catch(\Aritmetica\NaoInterioException $e){
    echo 'Resultado não é um número interio<br>';
}

try {
    echo intdiv(8,0) . '<br>';
}catch(DivisionByZeroError $e){
    echo 'Divisão por zero<br>';
}

echo intdiv(8,2) . '<br>';
echo \intdiv(8,2) . '<br>';
echo \intdiv(8,3) . '<br>';