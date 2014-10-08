<?php
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