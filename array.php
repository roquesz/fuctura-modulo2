<?php

    $arrayNomes = array('Carlos', 'José', 'João');
    echo '<pre>';
    var_dump($arrayNomes);
    print_r($arrayNomes);
    $arrayDados = array(10, true, 'valor' => 10.01, "Este é um texto", 
                        'nomes' => $arrayNomes);
    echo '<hr>';
    var_dump($arrayDados);
    echo $arrayDados[0];
    echo '<br />';
    echo $arrayDados['valor'];
    echo '<br />';
    echo $arrayDados[2];
    echo '<br />';
    var_dump($arrayDados['nomes']);
    echo $arrayDados['nomes'][1];
    $variavel;
    $variavel = '';
?>