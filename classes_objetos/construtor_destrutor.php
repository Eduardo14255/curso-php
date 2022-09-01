<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($novoNome, $idade = 18) {
        echo 'Construtor Invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
 echo'E morreu!<br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos<br>";
    }
}

// $nome = new Pessoa(); // Problema

$pessoaA = new Pessoa('Rebeca Maria', 40);
$pessoaB = new Pessoa('João Pedro', 13);

$pessoaA->apresentar();
unset($pessoaA);

$pessoaB->apresentar();
$pessoaB-> null;