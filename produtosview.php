<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title>Lista Produtos</title>
</head>

<body>

<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Descrição</td>
        <td>Valor</td>
    </tr>
    <?php
    if (count($listaProdutos) > 0):
        foreach($listaProdutos as $produto):
    ?>
    <tr>
        <td><?php echo $produto->id;?></td>
        <td><?php echo $produto->nome;?></td>
        <td><?php echo $produto->descricao;?></td>
        <td><?php echo $produto->valor;?></td>
    </tr>
    <?php
        endforeach;
    endif;
    ?>
</table>

</body>
</html>