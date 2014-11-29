<?php
	// session_start();
	// echo session_id();
	// $_SESSION['nome'] = '';
	// unset($_SESSION['nome']);
	// session_destroy();
	// exit();
	// echo base64_encode('minhasenhaé');
	// echo '<br>'.base64_decode('bWluaGFzZW5oYcOp');
	// exit();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Roque Junior">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Javascript</title>
  </head>
  <body>
  	<div id="texto">Texto da div</div>
  	<div id="nome" name="nome">Texto da div Nome</div>
  	<button type="button" id="bt" onclick="alerta()">Botão</button>
  	<a href="javascript:alerta()">Link</a>
  	<br />
  	<input type="text" id="teste" value="" />
  	<br />
  	<button type="button" id="animate">Iniciar</button>
  	<div id="scroll" style="width: 100px; height: 400px; background: red;"></div>
  	<br />
  	<input type="text" id="a" name="a" /> + <input type="text" id="b" name="b" />
  	<button type="button" id="soma">Soma</button>
  	<div id="resultado"></div>
  </body>
</html>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="funcoes.js"></script>

