<?php

/**
* Classe mappant la table category_humeur
**/
namespace Application\Model;

class CCategoryHumeur {
    
    private $id;
    private $name;
    private $desc;
    private $timestamp;
    
    public function exchangeArray($data)
    {
        $this->id           = (isset($data['id'])) ? $data['id'] : null;
        $this->name         = (isset($data['name'])) ? $data['name'] : null;
        $this->desc         = (isset($data['desc'])) ? $data['desc'] : null;
        $this->timestamp    = (isset($data['timestamp'])) ? $data['timestamp'] : null;
    }
 
 
    public function getId(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    public function getDesc(){
        return $this->desc;
    }
}