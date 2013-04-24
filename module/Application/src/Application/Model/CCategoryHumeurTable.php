<?php
/**
 * Classe implementant la gateway accedant a la table category_humeur
 * 
 */
namespace Application/Model;

use Zend\Db\TableGateway\TableGateway;

class CCategoryHumeurTable {
    
    protected $tableGateway;   
    
    public function __construct( TableGateway $tableGateway ){
        $this->tableGateway = tableGateway;
    }
    
    public function fetchAll(){
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }
    
    public function getCategoryHumeur( $id ){
        $id = (int)$id;
        $rowSet = $this->tableGateway->select( array( 'id'=>$id ) );
        $row = $rowSet->current();
        if ( !$row ){
            throw new exception("Unable to find row with id=".$id."... Proceeding.")
        }
        return $row;
    }
    
    public function saveCategoryHumeur( CCategoryHumeur $cat ){
        
        $data = array (
            'name' => $cat->getName(),
            'desc' => $cat->getDesc()
        );
        $id = (int)$id;
        if ( $id == 0 )
            $this->tableGateway->insert($data);
        else{
            if ($this->getCateoryHumeur($id))
                $this->tableGateway->update($data,array('id'=>$id));
            else
                throw new Exception("Unable to find category to update with id=".$id."... Proceeding.")
        }
    }
    
    public function deleteCategoryHumeur( $id ){
        $this->$tableGateway->delete(array('id'=>$id));
    }
    
}