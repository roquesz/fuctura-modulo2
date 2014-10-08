<?php

class Humano
{
    private $nome;
    private $idade;
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getNome()
    {
        return $this->nome;
    }
    
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    
    public function getIdade()
    {
        return $this->idade;
    }
}

$humano = new Humano();
$humano->setNome('Roque Junior');
$humano->setIdade(36);

echo $humano->getNome(). ' - '.$humano->getIdade();
?>