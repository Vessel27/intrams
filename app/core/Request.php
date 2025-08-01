<?php

class Request{

    public $data = [];
    public $query = [];
    
    public function __construct(){
        $this->data = $_POST;
        $this->query = $_GET;
    }
    public function data($key){
        return array_key_exists($key, $this->data) ? $this->data[$key]: null;
    }
    public function query($key){
        return array_key_exists($key, $this->data) ? $this->data[$key]: null;
    }
    public function isPost(){
        return $_SERVER['REQUEST_METHOD'] === "POST";
    }

    public function isGet(){
        return $_SERVER['REQUEST_METHOD'] === "GET";
    }
}

?>