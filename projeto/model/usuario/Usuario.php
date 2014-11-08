<?
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

//include ("lib/MVC/Objeto.php");

class Usuario 
{
    /**
    * @access private
    * @var integer
    */  
    private $id = null;

    /**
    * @access private
    * @var string
    */  
    private $nome = null;

    /**
    * @access private
    * @var string
    */  
    private $login = null;

    /**
    * @access private
    * @var string
    */  
    private $senha = null;

	public function __construct($id = null, $nome = null, $login = null, $senha = null)
	{
        $this->id = $id;
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
	}
	
	// o método __set é responsável por setar o valor de uma propriedade.
	public function __set( $chave, $valor )
	{
	    $this->{$chave} = $valor;
	}

	//o método __get é responsável por interceptar o retorno de uma propriedade. 
	public function __get( $chave )
	{
		return $this->{$chave};
	}

	//Os métodos __isset e __unset interferem nas chamadas às funções isset() e unset() respectivamente.
	public function __isset( $chave )
	{
	    return isset( $this->{$chave} );
	}

	public function __unset( $chave )
	{
	    unset( $this->{$chave} );
	}

	//O método __call é chamado toda vez que um método é chamado e não encontrado.
	public function __call( $nomeDoMetodo, $argumentos )
	{
	   // vai reportar para alguém
	}
	

}
