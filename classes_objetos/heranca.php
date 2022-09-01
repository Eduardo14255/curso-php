<div class="titulo">Herança</div>

<?php
class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo 'Pessoa Criada!! <br>';
    }

    function __destruct(){
        echo 'Pessoa diz: Tchau!!';
    }

    public function apresentar(){
        echo 'Tchau!!';
    }
}

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login){
       //$this->nome = $nome;
        //$this->idade = $idade;
        $this->login = $login;
        echo 'Usuario Criado!<br>';
    }

    function __destruct(){
        echo 'Usuario Diz: Tchau!!';
    }
}

$usario = new Usuario('Gustavo Mendonça', 21, 'gust_mend');
$usario->apresentar();
unset($usario);