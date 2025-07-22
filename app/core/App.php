<?php


class App
{
    function baseurl() {
        return "http://localhost/capstone%20ni%20carl/"; // Adjust as needed
    }
    private $controller = "Home";
    private $method = "index";
    private $params;


    private function slitURL(){
        $URL = $_GET['url'] ?? "home";
        $URL = explode("/",filter_var(trim($URL, "/"), FILTER_SANITIZE_URL));
        return $URL;
    }

    public function run(){
        $URL = $this->slitURL();

        //var_dump(print_r($URL));

        //Controller
        $filename = "app/controllers/" . ucfirst($URL[0])  . ".php";
        if(file_exists($filename)){
            require $filename;
            $this->controller = ucfirst($URL[0]);
            unset($URL[0]);
        } else {

            $filename = "app/controllers/404.php";
            require $filename;
            $this->controller = "Error404";
        }

        $controller = new $this->controller;
        //Method
        if(!empty($URL[1]) && method_exists($controller, $URL[1])){
            $this->method = $URL[1];
            unset($URL[1]);
        }
        $this->params = (count($URL) > 0) ? $URL : [];
        call_user_func_array([$controller, $this->method], $this->params);
    }
}

?>