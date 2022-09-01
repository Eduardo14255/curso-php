<div class="titulo">Desafio Switch</div>
<form action="#" method="POST">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > milha</option>
        <option value="milha-km">Mlha > Km</option>
        <option value="metro-km">Metro > km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="fah-cel">Fahrenheit > Celsus</option>
        <option value="cel-feh">Celsus > fahrenheit</option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form>* {
        font-size: 1.8rem;
    }
</style>

<?php
const FATOR_CELSUS_FAHRENHEIT = 1.8;
$param = $_POST['param'] ?? 0;
$conversao = $_POST['conversao'];
switch ($conversao) {
    case 'km-milha':
        $resultado = $param / 1.609;
        break;
    case 'milha-km':
        $resultado = $param * 1.609;
        break;
    case 'metro-km':
        $resultado = $param * 1000;
        break;
    case 'km-metro':
        $resultado = $param / 1000;
        break;
    case 'fah-cel':
        $resultado = ($param - 32) * (1/FATOR_CELSUS_FAHRENHEIT);
        break;
    case 'cel-fah':
        $resultado = $param * FATOR_CELSUS_FAHRENHEIT + 32;
        break;

        default:
        $resultado = 'Nenhum valor informado';
}

echo $resultado;
