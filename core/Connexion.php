<?php
/**
 * Created by PhpStorm.
 * User: lafer
 * Date: 26-08-17
 * Time: 14:37
 */

class Connexion {
    private static $_instance = NULL;


    public static function getInstance() {
        $config = Config::getInstance();
        //s'il n'existe pas encore d'instance de PDO
        if (!self::$_instance) {
            try  {
                self::$_instance = new PDO($config->get('db_server'),$config->get('db_user'),$config->get('db_pass'));
                self::$_instance->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e) {
                print 'Erreur '.$e->getMessage().'<br />';
            }
        }
        // retour de la variable contenant les informations de connexion ($db dans l'index)
        return self::$_instance;
    }
}
?>
