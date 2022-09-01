<?php
namespace Aritmetica;

class NaoInterioException extends \Exception{

}

function intdiv($a, $b){
    if($b == 0){
        throw new \DivisionByZeroError();
    }

    if($a % $b > 0){
        throw new NaoInterioException();
    }

    return $a / $b;
}