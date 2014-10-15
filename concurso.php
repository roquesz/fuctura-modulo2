<?php
phpinfo();
function concurso($nome, $idade)
{
    if($idade < 18){
        throw new Exception($nome." você precisa ter mais 
        de 18 anos para participar do concurso.<br />");
    }
    
    echo ("Parabéns ".$nome." você está participando do concurso!<br />");
}

try{
    concurso('Vinícios', 25);
    concurso('Vitor', 14);
    concurso('Wagner', 19);
} catch(Exception $erro) {
    echo '<pre>';
    var_dump($erro);
    echo 'Atenção: '.$erro->getMessage();
}

?>