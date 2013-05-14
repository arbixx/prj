<?php
/**
 * Description of CMetroUserTable
 *
 * @author Arbi
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class CMetroUserTable {
    
    protected $tableGateway;   
    
    public function __construct( TableGateway $tableGateway ){
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll(){
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function getMetroUser( $id ){
        $id = (int)$id;
        $rowSet = $this->tableGateway->select( array( 'id'=>$id ) );
        $row = $rowSet->current();
        if ( !$row ){
            throw new exception("Unable to find row with id=".$id."... Proceeding.");
        }
        return $row;
    }
    
    public function getMetroUsersByLine( $line ){
        $line = (int)$line;
        $rowSet = $this->tableGateway->select( array( 'ligneid'=>$line ) );
        return $rowSet;
    }
    
    public function getMetroUsers(){
        $rowSet = $this->tableGateway->select();
        return $rowSet;
    }
    
    public function saveMetroUser( CMetroUser $u ){
        
        $data = array (
            'login' => $u->getLogin(),
            'pwd' => $u->getPassword(),
            'email' => $u->getEmail(),
            'desc' => $u->getDesc(),
            'age' => $u->getAge(),
            'photoid' => $u->getPhotoId(),
            'sexe' => $u->getSexe(),
            'cherchefemme' => $u->getCherchefemme(),
            'cherchehomme' => $u->getCherchehomme(),
            'blacklist' => $u->getBlacklist(),
            'allownotifonline' => $u->getAllownotifonline(),
            'contactfirst' => $u->getContactfirst(),
            'lastonline' => $u->getLastonline(),
        );
        $id = (int)$id;
        if ( $id == 0 )
            $this->tableGateway->insert($data);
        else{
            if ($this->getMetroUser($id))
                $this->tableGateway->update($data,array('id'=>$id));
            else
                throw new Exception("Unable to find Metro User to update with id=".$id."... Proceeding.");
        }
    }
    
    public function deleteMetroUser( $id ){
        $this->$tableGateway->delete(array('id'=>$id));
    }
    
}

?>
