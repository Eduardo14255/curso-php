<div class="titulo">Traits 01</div>

<?php

use Usuario as GlobalUsuario;

trait validacao{
    public $a = 'Valor a';

    public function validarString($str){
        return isset($str) && $str!== '';
    }
}

trait validacaoMelhor{
    public $b = 'Valor B';
    private $c = 'Valor C Privado';

    public function validacaoStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;

    public function imprimirvalorC(){
        echo '<br>', $this->c;
    }
}

//var_dump(validacao->validarString(''));

$usuario = new Usuario('.', '..', '.');
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>',$usuario->b;