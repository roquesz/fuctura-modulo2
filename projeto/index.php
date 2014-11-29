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
session_start();
error_reporting(0);
include("conf/config.inc.php");
//exit($_SERVER["REDIRECT_URL"]);
$url = str_replace($pasta, '', $_SERVER["REDIRECT_URL"]);
$arrKeys = explode("/",$url);
array_shift($arrKeys);
$modulo = array_shift($arrKeys);
$acao   = array_shift($arrKeys);

if(!$modulo){
	$modulo = 'home';
}

$pastaModulo = strtolower($modulo);

try{
	

// inclui classe do controller a ser utilizado
$arquivo = "controller/" . $pastaModulo . "/Controller" . ucfirst($pastaModulo) . ".php";

if( !file_exists( $arquivo ) ){
	throw new Exception( 'O arquivo não existe.' );
}else
eval('include ($arquivo);');


// instancia o modulo
eval('$instancia = new Controller' . ucfirst(strtolower($modulo)) . '();' );
/*if(!){
	 throw new Exception("Erro ao instanciar controller: {$modulo}");
}
*/

switch ($modulo) {
    case "usuario":
        if(is_numeric($acao)){
           array_unshift($arrKeys, $acao);
           $acao = "usuarioHome";
        }
    break;
    case "bolao":
        if(is_numeric($acao)){
           array_unshift($arrKeys, $acao);
           $acao = "bolaoHome";
        }
        break;
}


// define uma acao default
if (!$acao) {
    // isso implica que todos os controllers 
    // terao que ter um metodo chamado acaoPadrao
    $acao = 'acaoPadrao';
}

// agora eu executo o metodo passado via url
eval('$instancia->' . $acao .'($arrKeys);');
/*if(!){
	throw new Exception("Erro ao chamar função: {$acao}");
}*/

}catch(Exception $e){
    print "Erro: ".$e->getMessage();
}
?>
