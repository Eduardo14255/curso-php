<div class="titulo">Operadores Relacionais</div>

<?php
var_dump(1 == 1); //true
var_dump(1 > 1);  // false
var_dump(1 >= 1); // true
var_dump(4 < 1); // true
var_dump(1 <= 1); // true
var_dump(1 != 1); // false
var_dump(1 <> 1); // false

var_dump(111 == '111'); // true
var_dump(111 === '111'); // false
var_dump(1 != 1); // false
var_dump(1 !== 1); // false
echo '<hr>';

echo "<p>Relacionais no IF/Else</p>";
$idade = 67;
if ($idade < 18){
    echo "Menor de idade com $idade anos <br>";
}elseif ($idade <= 65){
    echo "Adulto com $idade anos<br>";
}else echo  "Terceira e melhor idade com $idade anos!";

echo '<p>Spaceship</p><hr>';
var_dump(5<=> 3);

?>
<style>
    p { margin-top: 0px;}
    hr { margin-top: 0px;}
</style>