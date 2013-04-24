<?php

/**
* Classe mappant la table Humeur
**/
namespace Application\Model;

class CHumeur {
    
    private $id;
    private $typeid;
    private $categoryid;
    private $userid;
    private $imgid;
    private $title;
    private $text;
    private $datecreation;
    private $timestamp;
    
    public function exchangeArray($data)
    {
        $this->id           = (isset($data['id'])) ? $data['id'] : null;
        $this->typeid       = (isset($data['typeid'])) ? $data['typeid'] : null;
        $this->categoryid   = (isset($data['categoryid'])) ? $data['categoryid'] : null;
        $this->userid       = (isset($data['userid'])) ? $data['userid'] : null;
        $this->imgid        = (isset($data['imgid'])) ? $data['imgid'] : null;
        $this->title        = (isset($data['title'])) ? $data['title'] : null;
        $this->text         = (isset($data['text'])) ? $data['text'] : null;
        $this->datecreation = (isset($data['datecreation'])) ? $data['datecreation'] : null;
        $this->timestamp    = (isset($data['timestamp'])) ? $data['timestamp'] : null;
    }
    
    public function getId(){
        return $this->$id;
    }
    public function getTypeId(){
        return $this->$typeid;
    }
    public function getCategoryId(){
        return $this->$categoryid;
    }    
    public function getUserId(){
        return $this->$userid;
    }
    public function getImgId(){
        return $this->$imgid;
    }
    public function getTitle(){
        return $this->$title;
    }
    public function getText(){
        return $this->$text;
    }
    public function getDateCreation(){
        return $this->$datecreation;
    }
}