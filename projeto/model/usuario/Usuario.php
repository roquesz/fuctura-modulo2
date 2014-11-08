<?
/**
* [Descri��o do arquivo].
*
* [mais informa��es precisa ter 1 [ENTER] para definir novo par�grafo]
*
* [pode usar quantas linhas forem necess�rias]
* [linhas logo abaixo como esta, s�o consideradas mesmo par�grafo]
*
* @package [Nome do pacote de Classes, ou do sistema]
* @category [Categoria a que o arquivo pertence]
* @name [Apelido para o arquivo]
* @author Renato Nascimento <renato@r8tecnologia.com.br>
* @copyright [Informa��es de Direitos de C�pia]
* @license [link da licen�a] [Nome da licen�a]
* @link [link de onde pode ser encontrado esse arquivo]
* @version [Vers�o atual do arquivo]
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
	
	// o m�todo __set � respons�vel por setar o valor de uma propriedade.
	public function __set( $chave, $valor )
	{
	    $this->{$chave} = $valor;
	}

	//o m�todo __get � respons�vel por interceptar o retorno de uma propriedade. 
	public function __get( $chave )
	{
		return $this->{$chave};
	}

	//Os m�todos __isset e __unset interferem nas chamadas �s fun��es isset() e unset() respectivamente.
	public function __isset( $chave )
	{
	    return isset( $this->{$chave} );
	}

	public function __unset( $chave )
	{
	    unset( $this->{$chave} );
	}

	//O m�todo __call � chamado toda vez que um m�todo � chamado e n�o encontrado.
	public function __call( $nomeDoMetodo, $argumentos )
	{
	   // vai reportar para algu�m
	}
	

}
