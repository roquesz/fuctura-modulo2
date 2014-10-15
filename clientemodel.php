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
<<<<<<< HEAD
        $cliente = new Cliente('Nome 1', 'endereço pra constar', 'email', 'senha'); 
        return $arr;
    }
    
}

=======
        $cliente[] = new Cliente('Nome 1', 'endereço 1', 'email', 'senha');
        $cliente[] = new Cliente('Nome 2', 'endereço 2', 'email', 'senha');
        $cliente[] = new Cliente('Nome 3', 'endereço 3', 'email', 'senha'); 
        return $cliente;
    }
    
}
>>>>>>> fe8b0ebad087a83e14a81a4bb1de113d70651d2e
?>