<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
//        $this->load->helper('url');
    }
    
	public function index()
	{
        //$this->load->helper('url');
		$dados = array('titulo' => 'CRUD Codeigniter',
                       'tela' => '');
        $this->load->view('crud', $dados);
	}

	public function create()
	{
        // Validado o formulсrio
        $this->getValidation();
        if ($this->form_validation->run() == true):
            $dados = elements(array('nome', 'email', 'login', 'senha'), $this->input->post());
            $this->load->model('crud_model', 'crud');
            $model->crud->insert($dados);
        endif;
        $dados = array('titulo' => 'CRUD > create',
                       'tela' => 'create');
        $this->load->view('crud', $dados);
	}

	public function read()
	{
     	$dados = array('titulo' => 'CRUD > read',
                       'tela' => 'read');
        $this->load->view('crud', $dados);
	}

	public function update()
	{
     	$dados = array('titulo' => 'CRUD > update',
                       'tela' => 'update');
        $this->load->view('crud', $dados);
	}

	public function delete()
	{
     	$dados = array('titulo' => 'CRUD > delete',
                       'tela' => 'delete');
        $this->load->view('crud', $dados);
	}
    public function getValidation()
    {
        $this->form_validation->set_rules('nome', 'Nome', 'trim|required|alpha|255');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|255|strtolower|valid_email|is_unique[curso_ci.email]');
        $this->form_validation->set_rules('login', 'Login', 'trim|required|alpha|25|is_unique[curso_ci.login]');
        $this->form_validation->set_rules('senha', 'Senha', 'trim|required|alpha|25');
        $this->form_validation->set_message('matches', utf8_encode('O campo %s estс diferente do campo %s'));
        $this->form_validation->set_rules('senha2', utf8_encode('Confirmaчуo de Senha'), 'trim|required|25|matches[senha]');
    }
    
}
?>