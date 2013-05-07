<?php
/**
 * Description of CMetroUser
 *
 * @author Arbi
 */
namespace Application\Model;

class CMetroUser {
    
    private $id;
    private $login;
    private $pwd;
    private $email;
    private $desc;
    private $age;
    private $photoid;
    private $sexe;
    private $cherchefemme;
    private $cherchehomme;
    private $blacklist;
    private $allownotifonline;
    private $contactfirst;
    private $lastonline;
    private $timestamp;
    
    public function exchangeArray($data)
    {
        $this->id               = (isset($data['id'])) ? $data['id'] : null;
        $this->login            = (isset($data['login'])) ? $data['login'] : null;
        $this->pwd              = (isset($data['pwd'])) ? $data['pwd'] : null;
        $this->email            = (isset($data['email'])) ? $data['email'] : null;
        $this->desc             = (isset($data['desc'])) ? $data['desc'] : null;
        $this->age              = (isset($data['age'])) ? $data['age'] : null;
        $this->photoid          = (isset($data['photoid'])) ? $data['photoid'] : null;
        $this->sexe             = (isset($data['sexe'])) ? $data['sexe'] : null;
        $this->cherchefemme     = (isset($data['cherchefemme'])) ? $data['cherchefemme'] : null;
        $this->cherchehomme     = (isset($data['cherchehomme'])) ? $data['cherchehomme'] : null;
        $this->blacklist        = (isset($data['blacklist'])) ? $data['blacklist'] : null;
        $this->allownotifonline = (isset($data['allownotifonline'])) ? $data['allownotifonline'] : null;
        $this->contactfirst     = (isset($data['contactfirst'])) ? $data['contactfirst'] : null;
        $this->lastonline       = (isset($data['lastonline'])) ? $data['lastonline'] : null;
        $this->timestamp        = (isset($data['timestamp'])) ? $data['timestamp'] : null;
    }
    
    public function getId(){
        return $this->id;
    }
    public function getLogin(){
        return $this->login;
    }
    public function getPassword(){
        return $this->pwd;
    }    
    public function getEmail(){
        return $this->email;
    }
    public function getDesc(){
        return $this->desc;
    }
    public function getAge(){
        return $this->age;
    }
    public function getPhotoId(){
        return $this->photoid;
    }
    public function getSexe(){
        return $this->sexe;
    }
    public function getCherchefemme(){
        return $this->cherchefemme;
    }
    public function getCherchehomme(){
        return $this->cherchehomme;
    }
    public function getBlacklist(){
        return $this->blacklist;
    }
    public function getAllownotifonline(){
        return $this->allownotifonline;
    }
    public function getContactfirst(){
        return $this->contactfirst;
    }
    public function getLastonline(){
        return $this->lastonline;
    }
    public function getTimestamp(){
        return $this->timestamp;
    }
    
    /**
     * Returns a JSON string representation of this user object
     */
    public function toJson(){
        $str = '';
        $str .= '"user'.$this->id.'": {';
        $str .= '"id": "'.$this->id.'",';
        $str .= '"login": "'.$this->login.'",';
        $str .= '"pwd": "'.$this->pwd.'",';
        $str .= '"email": "'.$this->email.'",';
        $str .= '"desc": "'.$this->desc.'",';
        $str .= '"age": "'.$this->age.'",';
        $str .= '"photoid": "'.$this->photoid.'",';
        $str .= '"sexe": "'.$this->sexe.'",';
        $str .= '"cherchefemme": "'.$this->cherchefemme.'",';
        $str .= '"cherchehomme": "'.$this->cherchehomme.'",';
        $str .= '"blacklist": "'.$this->blacklist.'",';
        $str .= '"allownotifonline": "'.$this->allownotifonline.'",';
        $str .= '"contactfirst": "'.$this->contactfirst.'",';
        $str .= '"lastonline": "'.$this->lastonline.'",';
        $str .= '"timestamp": "'.$this->timestamp.'"';
        $str .= '}';
        return $str;
    }
}

?>
