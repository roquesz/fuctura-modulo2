<?php

    echo '<pre>';
    echo 'Booleano<br />';
    var_dump(true);
    var_dump(trUe);
    print_r(truE);
    var_dump(false);
    print_r(false);
    echo '<br />Inteiro<br />';
    echo 10;
    echo '<br />';
    print 20;
    echo '<br />';
    print_r(40);
    echo '<br />';
    var_dump(100);
    echo '<br />';
    echo '<br />Float<br />';
    echo number_format(1000.09, 2, ',', '.');
    echo '<br />';
    $nome = "Roque Junior";
    echo utf8_encode("Este $nome &eacute; meu texto<br />");
    echo utf8_decode('Este $nome é meu texto');
    
?>