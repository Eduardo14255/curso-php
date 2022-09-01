<div class="titulo">Erros Personalizados</div>

<?php
class FaixaEtariaExcapetion extends Exception{
    public function __construct($message, $code = 0 , $previous = null){
        echo "Erro personalizado: $message<br>";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade){
    if($idade < 18){
        throw new FaixaEtariaExcapetion('Ainda está muito longe');
    }

    if($idade >70){
        throw new FaixaEtariaExcapetion('Já deveria estar aposentado');
    }
    
    return 70 - $idade;
}

$idadesAvaliadas = [15,30,60,80];

foreach ($idadesAvaliadas as $idade){
    try{ 
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restante<br>";
    }catch(FaixaEtariaExcapetion $e){
        echo "Não foi possível calcular para $idade anos.<br>";
        ##echo "Motivo: {$e->$getMessage()}<br>";
    }
}

echo "Fim!";