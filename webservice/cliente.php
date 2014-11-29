<?php
	include('lib/nusoap.php');
	$cliente = new nusoap_client('http://localhost/webservice/servidor.php?wsdl');
	$cliente = new nusoap_client('http://localhost/webservice/');

	$parametros = array('nome' => 'Roque Junior',
						'idade' => 37);

	$resultado = $cliente->call('getConcursos', $parametros);

	echo utf8_encode($resultado);

?>