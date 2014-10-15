<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends CI_Controller
{
    public function index()
    {
        $this->load->view('produtos');
    }
    
    public function lista()
    {
        $dados = array();
        $dados['titulo'] = 'Tнtulo do projeto';
        $dados['descricao'] = 'Descriзгo do site';
        $dados['produtos'] = array(
                                    array('id'=>1, 'nome' => 'produto 1'),
                                    array('id'=>2, 'nome' => 'produto 2'),
                                    array('id'=>3, 'nome' => 'produto 3')
                                    );
        
        $this->load->view('lista-produtos', $dados);
    }
}


?>