<?php

    class Produtos{
        
        private $id;
        private $nome;
        private $descricao;
        private $valor;
        
        public function __construct($id = null, 
                                    $nome = null, 
                                    $descricao = null, 
                                    $valor = null)
        {
            $this->id = $id;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->valor = $valor;
        }
                
        public function __set($atributo, $valorDoAtributo)
        {
            $this->$atributo = $valorDoAtributo;
        }
        
        public function __get($atributo)
        {
            return $this->$atributo;
        }
        
    }

?>