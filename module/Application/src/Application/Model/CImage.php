<?php

/**
* Classe mappant la table image
**/
namespace Application\Model;

class CImage {
    
    private $id;
    private $path;
    private $filename;
    private $timestamp;
    
    public function exchangeArray($data)
    {
        $this->id           = (isset($data['id'])) ? $data['id'] : null;
        $this->path         = (isset($data['path'])) ? $data['path'] : null;
        $this->filename     = (isset($data['filename'])) ? $data['filename'] : null;
        $this->timestamp    = (isset($data['timestamp'])) ? $data['timestamp'] : null;
    }
    
    
    public function getId(){
        return this->$id;
    }
    public function getPath(){
        return this->$path;
    }
    public function getFileName(){
        return this->$filename;
    }    
    
}