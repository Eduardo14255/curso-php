<div class="titulo">Arrays Constantes</div>
<?php
const FRUTAS = array('Laranja', 'abacaxi');
//FRUTAS = 'teste';
//FRUTAS[0] = 'banana';
//FRUTAS[0] = 'banana';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford => Fiesta"] ;
// CARROS [BMW] = '325i';
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Beo Horizonte', 'Recife'));
//Cidades[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];