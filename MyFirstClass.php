<?php

class MyFirstClass
{
    var $acesso;
    function __construct($funcao)
    {
        echo 'ola';
        $this->acesso = false;
        if ($funcao == 'adm'){
            $this->acesso = true;
        }
    }
}

$obj = new MyFirstClass();

?>