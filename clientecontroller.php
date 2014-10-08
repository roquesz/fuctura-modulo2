<?php
include("clientemodel.php");
class ClienteController
{
    public function listar()
    {
        $model = new ClienteModel();
        $clientes = $model->lista();
        return $clientes;
    }
    
}
$cli = new ClienteController();
echo '<pre>';
var_dump($cli->listar());
?>