<?php


class Template {
    
    private $data;
    
    public function loadUrl($url) {
        include($url);
    }
    
    public function redirect($url) {
        header("Location: $url");
    }
    
    public function set($name, $value, $clean = true) {
        if($clean) {
           $this->data[$name] = htmlentities($value, ENT_QUOTES);
        } else {
            $this->data[$name] = $value;
        }
    }
    
    public function get($name) {
        if(isset($this->data[$name])){
            return $this->data[$name];
        } else {
            return '';
        }
    }
    
}
