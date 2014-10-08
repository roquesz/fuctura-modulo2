<?php
class Vegetal{
    
    var $comestivel;
    var $cor;
    
    function vegetal($comestivel, $cor="verde")
    {
        $this->comestivel = $comestivel;
        $this->cor = $cor;
    }
    
    function is_comestivel()
    {
        return $this->comestivel;
    }
    
    function qual_cor()
    {
        return $this->cor;
    }
    
}
?>