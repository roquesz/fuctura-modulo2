<?php
include("vegetal.php");
class Espinafre extends Vegetal
{
    var $cozido = false;
    function espinafre()
    {
        $this->vegetal('sim', 'verde');
    }
    function cozinhe()
    {
        $this->cozido = true;
    }    
    function esta_cozido()
    {
        return $this->cozido;
    }
}


>