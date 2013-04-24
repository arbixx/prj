<?php

/**
* Classe mappant la table Comment
**/
namespace Application\Model;

class CComment {
    
    private $id;
    private $humeurid;
    private $userid;
    private $text;
    private $date;
    private $timestamp;
    
    public function exchangeArray($data)
    {
        $this->id           = (isset($data['id'])) ? $data['id'] : null;
        $this->humeurid     = (isset($data['humeurid'])) ? $data['humeurid'] : null;
        $this->userid       = (isset($data['userid'])) ? $data['userid'] : null;
        $this->text         = (isset($data['text'])) ? $data['text'] : null;
        $this->date         = (isset($data['date'])) ? $data['date'] : null;
        $this->timestamp    = (isset($data['timestamp'])) ? $data['timestamp'] : null;
    }
    
    public function getId(){
        return $this->$id;
    }
    public function getHumeurId(){
        return $this->$humeurid;
    }
    public function getUserId(){
        return $this->$userid;
    }    
    public function getText(){
        return $this->$text;
    }
    public function getDate(){
        return $this->$date;
    }
    
    
}