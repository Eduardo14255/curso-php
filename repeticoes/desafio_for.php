<div class="tiu">Desafio laço FOR</div>

<!--
Usar o for..
#
##
###
####
#####
1) Pode usar o incremento $i++
2) Não pode usar incremnto $i++
-->

<?php
$impressao = '';
for($cont = 1; $cont <=5; $cont++){
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<hr>';

for($impressao2 = '#'; $impressao2 !== '######'; $impressao2 .='#'){
    echo "$impressao2 <br>";
}