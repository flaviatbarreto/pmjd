<?php

class Form{
    
    private $postData;
    private $currentItem;
    private $validate;
    private $error;
    
    public function __construct() {
        $this->postData = array();
        $this->error = array();
        $this->currentItem = null;
        $this->validate = new Validate();
    }
    
    public function post($field){
        $this->postData[$field] = $_POST[$field];
        $this->currentItem = $field;
        return $this;
    }
    
    public function validate($type,$arg = null){
        if($arg){
            $error = $this->validate->{$type}($this->postData[$this->currentItem],$arg);
        }else{
            $error = $this->validate->{$type}($this->postData[$this->currentItem]);
        }
        
        
        if($error){
            $this->error[$this->currentItem] = $error;
        }
        return $this;
    }
    
    public function fetch($field = false){
        if($field && isset($this->postData[$field])){
            return $this->postData[$field];
        }else{
            return $this->postData;
        }
    }
    
    public function submit(){
        if(!empty($this->error)){
            $str = '';
            foreach($this->error as $key => $value){
                $str .= $key.' => '.$value.'\n';
            }
            throw new Exception($str);
        }
        return true;
    }
    
    public function __call($name,$arguments){
        throw new Exception("$name does not exist inside the ".__CLASS__);
    }
}
?>
