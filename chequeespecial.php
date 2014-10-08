<?php
include("chequecomum.php");
class ChequeEspecial extends ChequeComun
{
    function __construct()
    {
        parent::__construct();
    }
    public function calculaJuros()
    {
        return $this->valor * 1.10;
    }
}


?>