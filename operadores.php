<?php

    $x = 10;
    $nome = 'Roque Junior';
    echo '<pre>';
    var_dump(10 === $x);
    var_dump($nome != $x);
    var_dump($x > 8);
    var_dump($x < 8);
    var_dump($x >= 18);
    var_dump($x<=18);
    echo '<hr>';
    $z = $x >= 10;
    var_dump($z);
    $y = $nome == 'Jose';
    var_dump($y);
    var_dump($z && $y);
    var_dump($z || $y);
    var_dump(!$z);
    $soma = ((10 + 20) + (40 * 2)) / 10;
?>
T && T = T
T && F = F
F && T = F
F && F = F