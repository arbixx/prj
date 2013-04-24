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
    protected $categoryHumeurTable;
    
    
    public function getCategoryHumeurTable(){
        if (!$this->categoryHmeurTable){
            $sm = $this->getServiceLocator();
            $this->categoryHumeurTable = $sm->get('Application\Model\CCategoryHumeurTable');
        }
        return $this->categoryHumeurTable;
    }
    
    public function indexAction()
    {
        return new ViewModel( 
            array(
                'categories' => $this->getHumeurCategoryTable()->fetchAll()
            )
        );
    }
    
    
    
}
