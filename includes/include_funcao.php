<div class="titulo">Include Função</div>

<?php
echo 'Carrengando: include_função<br>';

function carregarArquivo(){
    include ('include_arquivo.php');

    echo $variavel . '<br>';
    echo soma(2,5) . "!<br>";
}

echo 'Novamente n arquivo include_funcao<br>';
//echo soma(1,8) . '!<br>;
carregarArquivo();

echo "Variável = '{$variavel}'.";
//var_dump($variavel);
echo '<br>' . soma(3,8);