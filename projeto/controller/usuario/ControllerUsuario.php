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
include_once ("model/usuario/ModelUsuario.php");

class ControllerUsuario extends Controller
{
	public static function seLogado() 
	{
		if(!$_SESSION['usuarioLogado']){
			$controllerUsuario = new controllerUsuario();
			$controllerUsuario->login();
			die();
		}
	}
	
	public function acaoPadrao($parametros) 
	{
		$this->usuarioHome($parametros);
	}
	
	public function login($parametros = null)
	{
		
		if(!$_SESSION['usuarioLogado']){
			$view = new View();
			$view->tipo = 'int';
			$view->carregar("usuario/login.html");
			$view->mostrar();
		}else{
			$this->usuarioHome();
		}		

	}
	
	public function processaLogin($parametros)
	{
	   
        include_once ("model/usuario/ModelUsuario.php");
        $model = new ModelUsuario();
        
		$execute = $model->pesquisarPorEmail($_POST['email']);
		$data['result'] = 'ok';
		if ($execute){
			if (md5($_POST['senha']) != $execute[0]['usu_senha']){
				$data['result'] = false;
				$view = new View();
				$view->data = $data;
				$view->carregar("usuario/xmlLogin.html");
				$view->mostrar();	
			} else {
				$_SESSION['usuario']['id']    = $execute[0]['usu_id'];
				$_SESSION['usuario']['nome']  = $execute[0]['usu_nome'];
				$_SESSION['usuario']['email'] = $execute[0]['usu_login'];
				$_SESSION['usuario']['acesso'] = $execute[0]['ultimo_acesso'];
				$_SESSION['usuarioLogado']    = TRUE;
				$this->contratoHome();
			}
		} else {
			$data['result'] = false;
			$view = new View();
			//$view->tipo = 'xml';
			$view->data = $data;
			$view->carregar("usuario/xmlLogin.html");
			$view->mostrar();	

		}
    
	}
	
	public function logout()
	{
		ControllerUsuario::seLogado();
        $view = new View();
		$view->carregar("usuario/logout.html");
		$view->mostrar();
	}
	
}