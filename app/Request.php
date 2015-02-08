<?php

namespace app;

/**
 * Class Request
 * @package app
 */
class Request {

    protected $url;
    protected $view;
    protected $defaultUrl = 'index';

    /**
     * Constructor del request con el parametro url.
     * @param $url
     */
    public function __construct($url){
        $this->url = strtolower($url);

        if (empty($this->url)) {
            $this->url = $this->defaultUrl;
        }
    }

    /**
     * Método para obtener el valor de url.
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Método para obtener el nombre de la vista.
     * @return string
     */
    protected function getViewName(){
        return 'view/'.$this->url.'.html';
    }

    /**
     * Método para ejecutar la respuesta.
     */
    public function execute(){

        if(!file_exists($this->getViewName())){
            $response = new View('error');
            header("HTTP/1.0 404 Not Found");
            $this->renderView($response);
            exit;
        }else{
            $response = new View($this->url);
        }

        $this->renderView($response);
    }

    /**
     * Método para hacer el render.
     * @param $response
     */
    public function renderView($response)
    {
        if ($response instanceof Response) {
            $response->execute();
        }else {
            exit('Error: Invalid response');
        }
    }

}