<div class="titulo">While / Do While</div>

<?php
const VALOR_LIMETE = 5;
$contador = 0;

while ($contador < VALOR_LIMETE) {
    echo "while $contador <br>";
    $contador++;
}

$contador = 100;
do {
    echo "do-While $contador <br>";
    $contador++;
} while ($contador < VALOR_LIMETE);

$contador = 0;
while(true){
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >= VALOR_LIMETE)  break;
}