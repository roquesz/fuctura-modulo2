<?php
class Humano
{
    private $nome;
    private $idade;
    
    public function __set($atributo, $valorAtributo)
    {
        $this->$atributo = $valorAtributo;
    }
    
    public function __get($atributo)
    {
        return $this->$atributo;
    }
}

$humano = new Humano();
$humano->nome = 'Roque Junior';
$humano->idade = 36;

echo $humano->nome.' - '.$humano->idade;
?>