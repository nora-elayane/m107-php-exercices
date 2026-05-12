<?php

class Config{
    private $data = [] ; 
    public function __set($cle ,$value){
        $this->data[$cle] = $value ; 
    } 
    public function __get($cle){
        if(isset($this->data[$cle])){
            return $this->data[$cle] ;
        }else{
           return null ;  
        }
    }
    public function isset($cle){
        return isset($this->data[$cle]) ;
    }
    public function __toString(){
        foreach ($this->data as $key => $value) {
            echo  $key . " : " . $value . "<br>" ;
        }
    }

}
$c = new Config ; 
$c->host = "Localhost" ; 
echo  $c->host ;