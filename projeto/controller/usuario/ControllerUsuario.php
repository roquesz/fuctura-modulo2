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

	public function soma($parametros)
	{
		ControllerUsuario::seLogado();
		$view = new View();
        $valor1 = $parametros[0]; // Primeiro parâmetro enviado na url depois do método do controlador
		$valor2 = $parametros[1]; // segundo parâmetro enviado na url depois do método do controlador
        $resultado = $valor1 + $valor2; // Resultado da operação
		$array = array(); // Array criado para ser enviado para a View
		$array['somatorio'] = $resultado; // Incluir no array com a cheve 'somatorio' - resultado da soma
		$view->data = $array; // Adicionando ao atributo data do controller View o array que será enviado para a View
		$view->carregar('usuario/somatorio.html'); // Carrega o arquivo a exibido no browser
		$view->mostrar(); // Excreve na tela o arquivo carregado
	}
	
	public function login($parametros = null)
	{
		
		if(!$_SESSION['usuarioLogado']){
			$view = new View();
			$view->tipo = 'int';
			$data = array();
			$data['concursos'] = 'lista de concursos';
			$view->data = $data;
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
        
		$execute = $model->pesquisarPorEmail($parametros[1]);
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
				$view->carregar("usuario/xmlLogin.html");
				$view->mostrar();	
			}
		} else {
			$data['result'] = false;
			$data['concursos'] = 'lista de concursos';
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