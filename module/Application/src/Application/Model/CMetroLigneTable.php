<?php
/**
 * Description of CMetroLigneTable
 *
 * @author Arbi
 */
namespace Application\Model;

use Zend\Db\TableGateway\TableGateway;

class CMetroLigneTable {
    
    protected $tableGateway;   
    
    public function __construct( TableGateway $tableGateway ){
        $this->tableGateway = $tableGateway;
    }
    
    public function fetchAll(){
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function getMetroLigne( $id ){
        $id = (int)$id;
        $rowSet = $this->tableGateway->select( array( 'id'=>$id ) );
        $row = $rowSet->current();
        if ( !$row ){
            throw new exception("Unable to find Metro Ligne row with id=".$id."... Proceeding.");
        }
        return $row;
    }
    
    public function saveMetroLigne(CMetroLigne $u ){
        
        $data = array (
            'name' => $u->getName(),
            'desc' => $u->getDesc(),
        );
        $id = (int)$id;
        if ( $id == 0 )
            $this->tableGateway->insert($data);
        else{
            if ($this->getMetroLigne($id))
                $this->tableGateway->update($data,array('id'=>$id));
            else
                throw new Exception("Unable to find Metro Ligne to update with id=".$id."... Proceeding.");
        }
    }
    
    public function deleteMetroLigne( $id ){
        $this->$tableGateway->delete(array('id'=>$id));
    }
    
}

?>
