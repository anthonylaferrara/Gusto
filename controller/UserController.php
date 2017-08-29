<?php
/**
 * Created by PhpStorm.
 * User: lafer
 * Date: 29-08-17
 * Time: 18:48
 */

class UserController extends Controller
{

    public function insert(){
        if(isset($_POST['email'])){
            header('Location: '. BASE_URL . DS . 'signup/view?erroremail=true');
        }

    }

}