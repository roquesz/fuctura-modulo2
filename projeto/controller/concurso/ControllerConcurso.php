<?php
/**
* [Descrição do arquivo].
*
* [mais informações precisa ter 1 [ENTER] para definir novo parágrafo]
*
* [pode usar quantas linhas forem necessárias]
* [linhas logo abaixo como esta, são consideradas mesmo parágrafo]
*
* @package [Nome do pacote de Classes, ou do sistema]
* @category [Categoria a que o arquivo pertence]
* @name [Apelido para o arquivo]
* @author Renato Nascimento <renato@r8tecnologia.com.br>
* @copyright [Informações de Direitos de Cópia]
* @license [link da licença] [Nome da licença]
* @link [link de onde pode ser encontrado esse arquivo]
* @version [Versão atual do arquivo]
* @since [Arquivo existe desde: Data ou Versao]
*/
include_once ("lib/MVC/Controller.php");
include_once ("lib/MVC/View.php");
include_once ("model/concurso/ModelConcurso.php");

class ControllerConcurso extends Controller
{
	public static function seLogado() 
	{
		if(!$_SESSION['usuarioLogado']){
			die();
		}
	}
	
	public function acaoPadrao($parametros) 
	{
		$this->listar($parametros);
	}

	public function listar($parametros)
	{
        $modelConcurso = new ModelConcurso();
        $listaConcurso = $modelConcurso->listarTodos();
        $view = new View();
        $view->tipo = 'int';
        $data = array();
        $data['concursos'] = $listaConcurso;
        $view->data = $data;
        $view->carregar("concurso/listagem.html");
        $view->mostrar();
	}

	
}