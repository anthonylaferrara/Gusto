<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/22/17
 * Time: 9:31 AM
 */

class Model
{
    protected $db;
    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = Connexion::getInstance();
    }
}