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

class ModelConcurso extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function insereConcurso($titulo, $descricao, $situacao, $data, $inscricao)
	{
		if(!$this->pesquisarPorTitulo($titulo)){
			//$can_id = $this->conexao->nextId('usuario_seq');
			
			$sql  = "
						INSERT INTO tb_concursos(
											can_titulo,
											can_descricao,
											can_situacao,
											can_data,
											can_inscricao
											)
									 VALUES(
									 		'{$titulo}',
									 		'{$descricao}',
									 		MD5('{$situacao}'),
									 		'{$data}',
									 		'{$inscricao}'
									 		);
					";
			$acao    = $this->conexao->prepare($sql);
			$retorno['result'] = $acao->execute();	
		}else{
			$retorno['result'] = false;
			$retorno['msg']    = 'CPF não cadastrado.';
		}
		
		return $retorno;
	}
	
	public function pesquisarPorTitulo($titulo)
	{
		$sql = "SELECT * from tb_concursos where can_titulo = '{$titulo}'";
		$rs  = $this->conexao->query($sql);
		if($rs){
        	$arr = $rs->fetchAll(PDO::FETCH_ASSOC);
			return $arr;
		}else{
			return false;
		}
	}
	
	public function listarTodos()
	{
		$sql = "SELECT * from tb_concursos";
		$rs  = $this->conexao->query($sql);
		if($rs){
        	$arr = $rs->fetchAll(PDO::FETCH_ASSOC);
			$arr = $this->montarListaObjetos($arr, 'Concurso');
			return $arr;
		}else{
			return false;
		}
	}
	
    public function consultarPorId($id)
    {
		$sql = "SELECT * from tb_concursos where can_id = '{$id}'";
     	$rs  = $this->conexao->query($sql);
		if($rs && $rs->rowCount()){
        	$arr = $rs->fetchAll(PDO::FETCH_ASSOC);
			$arr = $this->montarListaObjetos($arr, 'Concurso');
            return $arr[0];
		}else{
			return false;
		}
        
    }
    
    public function alterarConcurso($arr)
    {
        $sql = "UPDATE tb_concursos SET can_titulo = '".addslashes($arr->titulo)."', 
                                 can_titulo = '".addslashes($arr->situacao)."', 
                                 can_descricao = '".addslashes($arr->decricao)."', 
                                 can_situacao = '".addslashes($arr->situacao)."', 
                                 can_data = '".addslashes($arr->data)."', 
                                 can_inscricao = '".addslashes($arr->inscricao)."' 
                                 WHERE can_id = ".$_SESSION['usuario']['id'];
        //echo $sql;
		$acao = $this->conexao->prepare($sql);
		return $acao->execute();	
    }
	
}
?>