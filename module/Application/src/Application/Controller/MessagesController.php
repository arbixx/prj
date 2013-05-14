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

class MessagesController extends AbstractActionController
{
    protected $metroMessagesTable;
    
    
    public function getMetroMessagesTable(){
        if (!$this->metroMessagesTable){
            $sm = $this->getServiceLocator();
            $this->metroMessagesTable = $sm->get('Application\Model\CMetroMessagesTable');
        }
        return $this->metroUserTable;
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
        $viewModel = new ViewModel(
                array(
                    'users' => $this->getMetroUserTable()->fetchAll(),
                )
        );
        $viewModel->setTerminal(true);
        return $viewModel;
    }
    
    public function ajaxGetOnlinesByLineAction(){
        
    }
            
    
}
