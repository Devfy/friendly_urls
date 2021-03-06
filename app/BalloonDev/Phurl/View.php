<?php

namespace BalloonDev\Phurl;

/**
 * Class View
 * @package app
 */
class View extends Response{

    protected $view;

    /**
     * Constructor de la vista.
     * @param $view
     */
    public function __construct($view){
        $this->view = $view;
    }

    /**
     * Método para obtener el nombre del archivo de la vista.
     * @return string
     */
    public function getFileName(){

        if(is_dir("view/".$this->view)){
            return "view/".$this->view."/index.html";
        }else if(strpos($this->view, "/")){
            return "view/".$this->view.".html";
        }

        return "view/".$this->view.".html";
    }

    /**
     * Método para ejecutar el render de la vista.
     */
    public function execute(){
        $html = $this->getFileName();
        include($html);
    }
}