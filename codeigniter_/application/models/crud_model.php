<?php
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    
    class Crud_Model extends CI_Model
    {
        
        public function insert($dados = null)
        {
            if (!is_null($dados)):
                echo "<pre>";
                print_r($dados);
                exit();
                $this->db->insert('curso_ci', $dados);
                
            endif;
        }
        
    }
?>