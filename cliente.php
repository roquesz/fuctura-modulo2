<?php
class Cliente
{
    // propriedades da classe objeto
    private $nome;
    private $endereco;
    private $email;
    private $telefone;

    public function __construct($nome, $endereco, $email, $telefone)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
    
    public function __get($name)
    {
        return $this->$name;
    }
    
}
?>