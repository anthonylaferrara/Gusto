<?php


/**
 * Class Controller
 */
class Controller
{
    public $request;
    protected $vars = array();
    public $layout = 'default';
    private $rendered = false;

    function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * @param $view
     * @return bool
     * Methode servant à afficher une vue;
     */

    public function render($view){
        if($this->rendered){return false;}
        $this->vars['path'] = $this->request->controller . DS . $view;
        extract($this->vars);
        if(strpos($view,'/') === 0){
            $view = ROOT.DS.'view'.$view.'.php';

        }else{
            $view = ROOT.DS.'view'.DS.$this->request->controller.DS.$view.'.php';
        }
        ob_start();
        require($view);
        $content_layout = ob_get_clean();
        require ROOT.DS.'view'.DS.'layout'.DS.$this->layout.'.php';
        $this->rendered = true;
    }

    public function set($key,$value=null){
        if(is_array($key)){
            $this->vars += $key;
        }else
        {
            $this->vars[$key] = $value;
        }
    }

}