<div class="titulo">Desafio Data</div>

<?php
class Data{
    public $dia = 01;
    public $mes = 'Janeiro';
    public $ano = 1970;

    public function apresentar(){
        return "Data: {$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$aniversario = new Data();
$aniversario->dia = 15;
$aniversario->mes = "Agosto";
$aniversario->ano = 2014;

echo $aniversario->apresentar(),'<br>';

$casamento = new Data();
$casamento->dia = '01';
$casamento->mes = "Agosto";
$casamento->ano = 2009;

echo $casamento->apresentar();