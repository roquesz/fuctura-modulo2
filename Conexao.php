<?php

class Conexao
{
    /**
     * @access private
     * @var PDO_CONNECTION
     */
    private static $con = null;

    public static function getConexao()
    {
        if (Conexao::$con == null) {

            try {
                if (TYPE == 'mysql'):
                    Conexao::$con = new PDO('mysql:host=localhost;
    				                         port=3306;
    				                         dbname=fuctura_academia', 'root', '');
                elseif (TYPE == 'oracle'):
                endif;
            }
            catch (PDOException $e) {
                echo 'erro';
            }
        }
        return Conexao::$con;
    }

    public static function close()
    {
        Conexao::$con = null;
    }

}
