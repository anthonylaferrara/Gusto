<?php
/**
 * Created by PhpStorm.
 * User: lafer
 * Date: 26-08-17
 * Time: 16:51
 */

class RestaurantController extends Controller
{
    private $restoDB;

    public function __construct()
    {
        $this->restoDB = new RestaurantsDB();
    }


    public function index(){
        $this->view();
    }

    public function view($id){

        $this->render('view');
    }
}