<?php
	include('lib/nusoap.php');
	$servidor = new nusoap_server();
	$servidor->configureWSDL('urn:Servidor');
	/****************************************************************************************
	 * WSDL é um documento proposto pela W3C a partir de Junho de 2007 escrito em XML 		*
	 * que visa padronizar as descrições das funcionalidades ofereridas por web services 	*
	 * de forma independente de plataforma ou linguagem.									*
	 ****************************************************************************************/
	$servidor->wsdl->schemaTargetNamespace = 'urn:Servidor';
	
	function getDados($nome, $idade){
		return($nome.' -> '.$idade);
	}
	
	$servidor->register(
		'getDados',
		array('nome'=>'xsd:string',
				'idade'=>'xsd:int'),
		array('retorno'=>'xsd:string'),
		'urn:Servidor.getDados',
		'urn:Servidor.getDados',
		'rpc',
		'encoded',
		'Apenas um exemplo utilizando o NuSOAP PHP.'
	);

	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
	$servidor->service($HTTP_RAW_POST_DATA);
    $f = fopen("arquivo.xml", "w+");
    fwrite($f, $HTTP_RAW_POST_DATA);
    fclose($f);
?>