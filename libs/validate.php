<?php

class Validate{
    public function minLength($data,$min){
        if(strlen($data) < $min)
            return "Your string can't be so short";
    }
    
    public function maxLength($data,$max){
        if(strlen($data) > $max)
            return "Your string can't be so long";
    }
    
    public function digit($data){
        if(!ctype_digit($data))
            return "Your string must be a digit";
    }
}
?>
