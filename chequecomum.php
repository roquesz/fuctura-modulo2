<?php
class ChequeComun
{    
    public $valor;
    
    function __construct()
    {
        
    }
    
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
    
    public function getValor()
    {
        return $this->valor;
    }
    
    public function calculaJuros()
    {
        return $this->valor * 1.25;
    }    
}
?>