<div class="titulo">Args & Retorno</div>

<?php 
function obterMensagem(){
    return 'Seja Bem Vindo(a)!';
}

obterMensagem();
$m = obterMensagem();
echo $m;
echo '<br>', obterMensagem();
echo '<br>';
var_dump(obterMensagem());

function obterMensagemComNome($nome){
    return "Bem Vindo, {$nome}!";
}

echo '<br>', obterMensagemComNome('Wagner');
echo '<br>', obterMensagemComNome('Eduardo');

function soma($a, $b){
    return $a + $b;
}

$x = 4;
$y = 5;
echo '<br>', soma(45, 78);
echo '<br>', soma(4, 5);

function trocaValor($a, $novoValor){
    $a = $novoValor;
}

$variavel = 1;
trocaValor($variavel, 3);
echo '<br>', $variavel;

function trocarValorDeVerdade(&$a, $novoValor){
    $a = $novoValor;
}

trocarValorDeVerdade($variavel, 5000);
echo '<br>', $variavel;