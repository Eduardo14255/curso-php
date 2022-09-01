<div class="titulo">Argumentos Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(null);
echo saudacao(null, null);
echo saudacao('Mestre', "Supremo");

function anotarPedido($comida, $bebida = 'Agua'){
    echo "Para Comer: $comida <br>";
    echo "Para Beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Agua', $comida){
    echo "Para Comer: $comida <br>";
    echo "Para Beber: $bebida <br>";
}

//anotarPedido2('Hamburguer');
anotarPedido2('refrigerante2', 'Pizza2');