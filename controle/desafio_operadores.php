<div class="titulo">Desafio Operadores Logicos</div>

<!--
Dois trabalhos -> Terça e Quinta!
-Se os dois trabalhos forem executados -> TV 50' e Soverte!
-Se apenas um dos trabalhos forem executados -> TV 32' e Sorvete!
-Se nunhum for executado -> Fica em casa e mais saudavel!
-->

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.8rem;
    }
</style>

<?php
$tb1 = $_POST['t1'];
$tb2 = $_POST['t2'];

if ($tb1 and $tb2 == 1){
    echo "Vamos comprar a TV de 50' e tomar Soverte!";
}if ($tb1 xor $tb2 == 1) {
    echo "Vamos comprar a TV de 32' e tomar Soverte!";
} if ($tb1 or $tb2 !== 1) {
  echo "Não vamos tomar sorvete e ficar mais saudavel!";
}


