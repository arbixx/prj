<?php
/**
 * Description of CMetroMessagesTable
 *
 * @author Arbi
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class CMetroMessagesTable {
    
    protected $tableGateway;   
    
    public function __construct( TableGateway $tableGateway ){
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll(){
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function getMetroMessage( $id ){
        $id = (int)$id;
        $rowSet = $this->tableGateway->select( array( 'id'=>$id ) );
        $row = $rowSet->current();
        if ( !$row ){
            throw new exception("Unable to find Metro Message row with id=".$id."... Proceeding.");
        }
        return $row;
    }
    
    public function saveMetroMessage(CMetroMessage $m ){
        
        $data = array (
            'expeditorid' => $m->getExpeditorId(),
            'receiverid' => $m->getReceiverId(),
            'text' => $m->getText(),
            'date' => $m->getDate(),
            'lu' => $m->getLu()
        );
        $id = (int)$m->getId();
        if ( $id == 0 )
            $this->tableGateway->insert($data);
        else{
            if ($this->getMetroMessage($id))
                $this->tableGateway->update($data,array('id'=>$id));
            else
                throw new Exception("Unable to find Metro Message to update with id=".$id."... Proceeding.");
        }
    }
    
    public function deleteMetroMessage( $id ){
        $this->$tableGateway->delete(array('id'=>$id));
    }
    
}

?>
