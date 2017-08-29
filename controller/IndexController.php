<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/18/17
 * Time: 9:45 AM
 */

class IndexController extends Controller
{
    function __construct($request)
    {
        parent::__construct($request);
        $this->index();
    }

    public function index(){
        $this->render('/index/index');
    }
}