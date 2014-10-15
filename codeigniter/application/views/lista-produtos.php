<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="gencyolcu" />

	<title><?php echo $titulo;?></title>
</head>

<body>
<?php echo $descricao;?>

<table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
    </tr>
    <?php
        foreach($produtos as $produto):
    ?>
    <tr>
        <td><?php echo $produto['id'];?></td>
        <td><?php echo $produto['nome'];?></td>
    </tr>
    <?php
        endforeach;
    ?>
</table>

</body>
</html>