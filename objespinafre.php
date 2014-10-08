<?php

    include('espinafre.php');
    
    $objEspinafre = new Espinafre();
    $objEspinafre->cozinhe();
    echo '<pre>';
    print_r($objEspinafre);

?>