<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/18/17
 * Time: 9:16 AM
 */

class Session
{
    private static $_instance;

    private function __construct()
    {
        if(!isset($_SESSION) && (session_id() == '')) {
            session_start();
            session_regenerate_id(true);
            session_name(md5(uniqid (rand(), true)));
        }
    }

    /**
     *
     * get input class instance (only one is created)
     */
    public static function Instance()
    {
        if (!self::$_instance)
        {
            self::$_instance = new Session();
        }

        return self::$_instance;
    }

    /**
     *
     * Get Session param value
     * @param string $index
     */
    public function get($index) {
        if(!isset($_SESSION)) return false;
        if (!empty($index) && !empty ( $_SESSION )) {
            if(isset($_SESSION[$index])){
                return filter_var($_SESSION[$index], FILTER_SANITIZE_STRING);
            }
        }
        return false;
    }

    /**
     *
     * set session param
     * @param string $index
     * @param mixed $value
     */
    public function set($index, $value) {
        if(!isset($_SESSION)) return false;
        if (!empty($index)) {
            $_SESSION[$index] = $value;
            return true;
        }
        return false;
    }

    /**
     *
     * remove a session param and return its value
     * @param string $index
     */
    public function remove($index){
        if(!isset($_SESSION)) return false;
        if (!empty($index) && !empty ( $_SESSION )) {
            if(isset($_SESSION[$index]))
                $value = filter_var($_SESSION[$index], FILTER_SANITIZE_STRING);
            unset($_SESSION[$index]);
            unset($index);
            return $value;
        }
        return false;
    }

    /**
     *
     * delete a session param
     * @param string $index
     */
    public function delete($index){
        if(!isset($_SESSION)) return false;
        if (!empty($index) && !empty ( $_SESSION )) {
            if(isset($_SESSION[$index]))
                unset($_SESSION[$index]);
            unset($index);
            return true;
        }
        return false;
    }

    /**
     *
     * destroy everything
     */
    public function destroy(){
        session_unset();
        session_destroy();
    }
}