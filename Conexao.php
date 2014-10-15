<?php
<<<<<<< HEAD
	mysql_connect('localhost', 'root', '');
	mysql_select_db('fuctura') or die(mysql_error());
?>
=======

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
>>>>>>> fe8b0ebad087a83e14a81a4bb1de113d70651d2e
