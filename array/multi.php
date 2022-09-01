<div class="titulo">Array Multidimensionais </div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "Naturalidade" => "São Paulo",
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "Naturalidade" => "Bahia",
    ],
    ];

    print_r($dados);
    echo '<br>' . $dados [0] ['idade'];    
    echo '<br>' . $dados [1] ['idade'];

    $dados [] = [
        "nome" => "Florinda",
        "idade" => 30,
        "naturalidade" => "Cidade do Mexico",
    ];

    echo '<br>';
    print_r($dados);
    echo'<br>' . $dados[2]['idade'];

    $dados [2]["vizinho"] = "Chavies";
    echo '<br>';
    print_r($dados[2]);

    unset($dados[1]);
    echo"<br>";
    print_r($dados);
    var_dump($dados[1000]);