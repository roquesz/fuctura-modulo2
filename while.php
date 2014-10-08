<?php
    $i = 0;
    while($i < 10){
        echo $i;
        $i++;
    }
    echo "<br>Fim do while<br /><br />";
    
    $i = 0;
    do
    {
        echo $i;
        $i++;
    }
    while($i < 10);
    echo "<br />Fim do do while<br /><br />";
    
    for($i = 0; $i < 10; $i++){
        echo $i;
    }
    echo "<br />Fim do FOR<br /><br />";
    
    $arr = array('João', 'José', 'Maria', 'Jonas');
    echo $arr[3].'<br />';
    foreach($arr as $nome){
        echo $nome.'<br />';
    }
    echo $arr[3].'<br />';
    echo "<br />Fim do Foreach<br /><br />";
    
?>