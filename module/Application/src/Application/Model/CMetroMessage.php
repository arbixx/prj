<?php
/**
 * Description of CMetroMessage
 *
 * @author Arbi
 */
namespace Application\Model;

class CMetroMessage {
    
    private $id;
    private $expeditorid;
    private $receiverid;
    private $text;
    private $date;
    private $lu;
    private $timestamp;
    
    public function exchangeArray($data)
    {
        $this->id               = (isset($data['id'])) ? $data['id'] : null;
        $this->expeditorid      = (isset($data['expeditorid'])) ? $data['expeditorid'] : null;
        $this->receiverid       = (isset($data['receiverid'])) ? $data['receiverid'] : null;
        $this->text             = (isset($data['text'])) ? $data['text'] : null;
        $this->date             = (isset($data['date'])) ? $data['date'] : null;
        $this->lu               = (isset($data['lu'])) ? $data['lu'] : null;
        $this->timestamp        = (isset($data['timestamp'])) ? $data['timestamp'] : null;
    }
    
    public function getId(){
        return $this->id;
    }
    public function getExpeditorId(){
        return $this->expeditorid;
    }
    public function getReceiverId(){
        return $this->receiverid;
    }    
    public function getText(){
        return $this->text;
    }
    public function getDate(){
        return $this->date;
    }
    public function getLu(){
        return $this->lu;
    }
    public function getTimestamp(){
        return $this->timestamp;
    }
    
    /**
     * Returns a JSON string representation of this message object
     */
    public function toJson(){
        $str = '';
        $str .= '"id": "'.$this->id.'",';
        $str .= '"expeditorid": "'.$this->expeditorid.'",';
        $str .= '"receiverid": "'.$this->receiverid.'",';
        $str .= '"text": "'.$this->text.'",';
        $str .= '"date": "'.$this->date.'",';
        $str .= '"lu": "'.$this->lu.'",';
        $str .= '"timestamp": "'.$this->timestamp.'"';
        $str .= '}';
        return $str;
    }
}

?>
