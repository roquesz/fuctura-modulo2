<?php
include("cliente.php");
class ClienteModel
{
    
    private $conn;
    public function __construct()
    {        
    }
    
    public function lista()
    {
        $cliente[] = new Cliente('Nome 1', 'endereço 1', 'email', 'senha');
        $cliente[] = new Cliente('Nome 2', 'endereço 2', 'email', 'senha');
        $cliente[] = new Cliente('Nome 3', 'endereço 3', 'email', 'senha'); 
        return $cliente;
    }
    
}
?>