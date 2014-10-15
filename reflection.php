<?php
class Apple
{
    public function primeiroMetodo(){}
    final protected function segundoMetodo(){}
    private static function terceiroMetodo(){}
}

function soma($a, $b)
{
    return $a + $b;
}

$class = new ReflectionClass('Apple');
$metodos = $class->getMethods();
echo '<pre>';
print_r($metodos);

?>