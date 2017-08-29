<?php
/**
 * Created by PhpStorm.
 * User: lafer
 * Date: 27-08-17
 * Time: 23:39
 */

class SignupController extends Controller
{
    public function index(){
        $this->view();
    }

    public function view(){
        $reg = new RestaurantsDB();
        $this->render('view');
    }
}