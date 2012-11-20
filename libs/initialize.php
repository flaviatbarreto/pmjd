<?php

class Initialize {
    public function __construct(){
        $url = isset($_GET['url']) ? $_GET['url'] : "index";
        $url = rtrim($url,'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/',$url);

        $file = "controllers/{$url[0]}.php";
        if(file_exists($file)){
            require $file;
        }else{
            $this->error();
        }

        $controller = new $url[0]();
        $controller->loadModel($url[0]);

        if(isset($url[2])){
            $controller->{$url[1]}($url[2]);
        }else{
            if(isset($url[1])){
                $controller->{$url[1]}();
            }else{
                $controller->index();
            }
        }
    }

    public function error(){
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false;
    }
}

?>