<div class="titulo">Include Vs Require</div>

<?php
ini_set('display_erro', 1);

echo 'Usando include com arquivo inexistente...<br>';
include ("arquivo_inexistente.php");

echo 'Usando require com arquivo inesxistente...<br>';
require ('arquivo_inexistente.php');

echo 'Não achou mesmo.. <br>';