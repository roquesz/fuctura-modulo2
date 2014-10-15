<?php
<<<<<<< HEAD
    define('SITE', 'http://www.facebook.com/');
?>
<html>
    <head>
    	<title>Meu primeiro Hello World</title>
        <link href="css.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <img src="img/foto.png" width="10" /><br />
        <?php
            echo 'Hello World';
        ?>
        <br />
        <?php
            $array = array(10, /*true, */"Meu Texto");
            /*
            var_dump($array);
            echo '<br />';
            */
            print_r($array); //Comentário
            //abaixo
            $_nome_1;
        ?>
        <br />
        
        <?php
            // include do arquivo inclusao.php
            include 'inclusao.php';
        ?>
        <div class="nome">
        <?php
            $nome = "Roque Junior";
            echo "Meu nome é " . $nome . " Novo texto " . 10;
            $nome = 10;
            echo '<br />'.$nome.'<br />';
            echo 10 + $nome;
        ?>
        </div>
        <br />
        asdasd
        asd
        asd
        a
        
        <div id="rodape">
        Este é o rodapé
        </div>
    </body>
</html>
=======
include("vegetal.php");
$objVegetal = new Vegetal('sim', 'roxo');
echo '<pre>';
print_r($objVegetal);
echo '<br>';
echo $objVegetal->is_comestivel();
echo '<br>';
echo $objVegetal->qual_cor();

echo '<br>';
$objVegetal2 = new Vegetal('nao');
print_r($objVegetal2);

?>
>>>>>>> fe8b0ebad087a83e14a81a4bb1de113d70651d2e
