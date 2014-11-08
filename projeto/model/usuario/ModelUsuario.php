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

include_once ("lib/MVC/Model.php");

class ModelUsuario extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function insereUsuario($nome, $email, $senha, $cidade, $uf, $time)
	{
		if(!$this->pesquisarPorEmail($email)){
			//$usu_id = $this->conexao->nextId('usuario_seq');
			
			$sql  = "
						INSERT INTO tb_usuario(
											usu_nome,
											usu_email,
											usu_senha,
											usu_cidade,
											usu_uf,
											usu_time
											)
									 VALUES(
									 		'{$nome}',
									 		'{$email}',
									 		MD5('{$senha}'),
									 		'{$cidade}',
									 		'{$uf}',
									 		'{$time}'
									 		);
					";
			$acao    = $this->conexao->prepare($sql);
			$retorno['result'] = $acao->execute();	
		}else{
			$retorno['result'] = false;
			$retorno['msg']    = 'E-mail já utilizado.';
		}
		
		return $retorno;
	}
	
	public function pesquisarPorEmail($email)
	{
		$sql = "SELECT * from tb_usuario where usu_login = '{$email}'";
		$rs  = $this->conexao->query($sql);
		if($rs){
        	$arr = $rs->fetchAll(PDO::FETCH_ASSOC);
			return $arr;
		}else{
			return false;
		}
	}
	
    public function consultarPorId($id)
    {
		$sql = "SELECT * from tb_usuario where usu_id = '{$id}'";
     	$rs  = $this->conexao->query($sql);
		if($rs && $rs->rowCount()){
        	$arr = $rs->fetchAll(PDO::FETCH_ASSOC);
			$arr = $this->montarListaObjetos($arr, 'Usuario');
            return $arr[0];
		}else{
			return false;
		}
        
    }
    
    public function alterarUsuario($arr)
    {
        if ($arr->senha != "**********"):
            $senha = ", senha = ".md5($arr->senha)."";
        endif;
        $sql = "UPDATE admin SET usu_nome = '".addslashes($arr->nome)."', usu_nome = '".addslashes($arr->login)."' ".$senha." WHERE usu_id = ".$_SESSION['usuario']['id'];
        //echo $sql;
		$acao = $this->conexao->prepare($sql);
		return $acao->execute();	
    }
	
}
?>