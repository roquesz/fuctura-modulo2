<?php

include("chequeespecial.php");

$chequeComum = new ChequeComun();
$chequeComum->setValor(4591.07);
echo $chequeComum->calculaJuros();
echo '<br>';
$chequeEspecial = new ChequeEspecial();
$chequeEspecial->setValor(4591.07);
echo $chequeEspecial->calculaJuros();


?>