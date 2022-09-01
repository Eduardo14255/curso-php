<div class="titulo">desafio Palidromo</div>

<?php
function palindro($palavra){
    $ultimoIndice = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimoIndice; $i++){
        if($palavra[$i] != $palavra[$ultimoIndice - $i]){
            return 'Não';
        }
    }
    return 'Sim';
}

echo palindro('arara') . ' ';
echo palindro('ana') . ' ';
echo palindro('abccba') . ' ';
echo palindro('bola') . ' ';
echo '<br>';

function palindroSimples($palavra){
    return $palavra=== strrev($palavra) ? 'Sim': 'Não';
}

echo palindro('arara') . ' ';
echo palindro('ana') . ' ';
echo palindro('abccba') . ' ';
echo palindro('bola') . ' ';