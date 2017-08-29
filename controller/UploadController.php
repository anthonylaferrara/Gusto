<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/13/17
 * Time: 4:31 PM
 */

class UploadController extends Controller
{
    function __construct($request)
    {
        parent::__construct($request);
        if(Session::Instance()->get('admin')){
            $this->set('message','Page introuvable');
            return $this->render('/error/404');
        }
    }

    public function index(){
        $model = new Model();
        $this->render('index');
    }

    public function select(){
        $this->render('uploaduserfile');
    }
}