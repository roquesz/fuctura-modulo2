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

class Concurso 
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
    private $titulo = null;

    /**
    * @access private
    * @var string
    */  
    private $descricao = null;

    /**
    * @access private
    * @var string
    */  
    private $situacao = null;

    /**
    * @access private
    * @var string
    */  
    private $data = null;

    /**
    * @access private
    * @var string
    */  
    private $inscricao = null;

    public function __construct($id = null, $titulo = null, $descricao = null, $situacao = null, $data = null, $inscricao = null)
	{
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->situacao = $situacao;
        $this->data = $data;
        $this->inscricao = $inscricao;
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
	public function __call( $tituloDoMetodo, $argumentos )
	{
	   // vai reportar para alguém
	}
	

}
