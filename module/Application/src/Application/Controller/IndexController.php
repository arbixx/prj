<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $metroUserTable;
    protected $metroLigneTable;
    
    
    public function getMetroUserTable(){
        if (!$this->metroUserTable){
            $sm = $this->getServiceLocator();
            $this->metroUserTable = $sm->get('Application\Model\CMetroUserTable');
        }
        return $this->metroUserTable;
    }
    public function getMetroLigneTable(){
        if (!$this->metroLigneTable){
            $sm = $this->getServiceLocator();
            $this->metroLigneTable = $sm->get('Application\Model\CMetroLigneTable');
        }
        return $this->metroLigneTable;
    }
    
    public function indexAction()
    {
        return new ViewModel( 
            array(
                'users' => $this->getMetroUserTable()->fetchAll(),
                'lignes' => $this->getMetroLigneTable()->fetchAll(),
            )
        );
    }
    
    public function testAction(){
        $ligneid = $this->getRequest()->getPost('ligneid','all');
        
        if ( $ligneid == '' || $ligneid == 'all' ){
            $viewModel = new ViewModel(
                    array(
                        'users' => $this->getMetroUserTable()->fetchAll(),
                    )
            );
        }
        else{
            $ligneid = (int)$ligneid;
            $viewModel = new ViewModel(
                    array(
                        'users' => $this->getMetroUserTable()->getMetroUsersByLine($ligneid),
                    )
            );
        }
        $viewModel->setTerminal(true);
        return $viewModel;
    }
    
            
    
}
