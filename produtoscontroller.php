<?php
    include('produtosmodel.php');

    class ProdutosController
    {
        
        public function listarProduto()
        {
            $modelProdutos = new ProdutosModel();
            $listaProdutos = $modelProdutos->getProdutos();
            include('produtosview.php');
        }
        
        public function pesquisaPorId($id)
        {
            $modelProduto = new ProdutosModel();
            $produto = $modelProduto->getProId($id);
            include('produtoformview.php');
        }
        
    }
    
    $controllerProduto = new ProdutosController();
    $controllerProduto->listarProduto();
?>