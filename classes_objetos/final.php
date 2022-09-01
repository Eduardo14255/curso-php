<div class="titulo">Modificador Final</div>

<?php
abstract class Abstrata {
    abstract public function metodo1();

    public final function metodo2(){
        echo 'Não vou mudar!<br>';
    }
}

class Classe extends abstrata {
    public function metodo1(){
        echo 'Execuntando método 1<br>';
    }

    //public function metodo2(){
      //  echo 'Execuntando método 2 <br>';
    //}
}

$classe = new Classe('..');
$classe->metodo1();
$classe->metodo2();

final class Unica{
    public $attr= 'Valor Único!!!!';
}

$unica = new Unica();
echo $unica->attr;

//class Duplicata extends Unica{
    //public $attr2;
//}