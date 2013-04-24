<?php

/**
* Classe mappant a table user
**/
namespace Application\Model;

class CUser {
    
    private $id;
    private $login;
    private $pwd;
    private $email;
    private $imgid;
    private $datecreation;
    private $notifications;
    private $blacklist;
    private $timestamp;
    
    public function exchangeArray($data)
    {
        $this->id               = (isset($data['id'])) ? $data['id'] : null;
        $this->login            = (isset($data['login'])) ? $data['login'] : null;
        $this->pwd              = (isset($data['pwd'])) ? $data['pwd'] : null;
        $this->email            = (isset($data['email'])) ? $data['email'] : null;
        $this->imgid            = (isset($data['imgid'])) ? $data['imgid'] : null;
        $this->datecreation     = (isset($data['datecreation'])) ? $data['datecreation'] : null;
        $this->notifications    = (isset($data['notifications'])) ? $data['notifications'] : null;
        $this->blacklist        = (isset($data['blacklist'])) ? $data['blacklist'] : null;
        $this->timestamp        = (isset($data['timestamp'])) ? $data['timestamp'] : null;
    }
    
    public function getId(){
        return $this->$id;
    }
    public function getLogin(){
        return $this->$login;
    }
    public function getPassword(){
        return $this->$pwd;
    }    
    public function getEmail(){
        return $this->$email;
    }
    public function getImgId(){
        return $this->$imgid;
    }
    public function getDateCreation(){
        return $this->$datecreation;
    }
    public function getNotifications(){
        return $this->$notifications;
    }
    public function getBlacklist(){
        return $this->$blacklist;
    }
}