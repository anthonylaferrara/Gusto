<?php


class Dispatcher
{
    private $request;

    function __construct($request = null)
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request); // parse l'url et la met dans un array
        $controller = $this->loadController();

        // si l'action demandé n'est pas une méthode du controller, redirige vers une page Error 404
        if (!in_array($this->request->action, get_class_methods($controller))) {
            $this->error('le controller ' . $this->request->controller . 'n\'a pas de methode ' . $this->request->action);
        } //sinon rend la vue correspondante
        else {
            call_user_func_array(array($controller, $this->request->action), $this->request->params);
            $controller->render($this->request->action);
        }

    }

    function error($message)
    {
        header("HTTP/1.0 404 Not Found");
        $controller = new Controller($this->request);
        $controller->set('message', $message);
        $controller->render('/error/404');
        die();
    }

    function loadController()
    {
        if(strcmp($this->request->url,'/') == 0){
            $file = ROOT . DS . 'controller' . DS . 'IndexController.php';
            require $file;
            return new IndexController($this->request);
        }
        else{
        $name = ucfirst($this->request->controller) . 'Controller';
        $file = ROOT . DS . 'controller' . DS . $name . '.php';
        if (file_exists($file)) {
            require $file;
            return new $name($this->request);
        } else {
            $this->error('La section <u><b>' . $this->request->controller . '</u></b> n\'existe pas');
        }
        }
    }


}
