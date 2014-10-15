<?php
	include("topo.php");
?>

<form name="frm" method="post" action="inserir.php">

	<label for="nome">Nome</label><br />
	<input type="text" id="nome" name="nome" value="" maxlength="50" /><br /><br />

	<label for="login">Login</label><br />
	<input type="text" id="login" name="login" value="" maxlength="50" /><br /><br />

	<label for="email">Email</label><br />
	<input type="text" id="email" name="email" value="" maxlength="255" /><br /><br />

	<label for="senha">Senha</label><br />
	<input type="password" id="senha" name="senha" value="" maxlenght="30" /><br /><br />

	<input type="submit" value="Cadastrar" />


</form>

<?php
	include("rodape.php");
?>