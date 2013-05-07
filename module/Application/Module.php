<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

/** Original include */
use Zend\Mvc\ModuleRouteListener;
/** Includes needed for DB interaction */
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
/** Exprime Tables */
use Application\Model\CCategoryHumeur;
use Application\Model\CHumeur;
use Application\Model\CTypeHumeur;
use Application\Model\CUser;
use Application\Model\CComment;
use Application\Model\CImage;
use Application\Model\CCategoryHumeurTable;
/** Metro Tables */
use Application\Model\CMetroUserTable;
use Application\Model\CMetroUser; 
use Application\Model\CMetroLigneTable;
use Application\Model\CMetroLigne; 

class Module
{
    public function onBootstrap($e)
    {
        $e->getApplication()->getServiceManager()->get('translator');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                /********************************* 
                 * EXPRIME PRJ
                 *********************************/
                // Factories for table category_humeur
                'Application\Model\CCategoryHumeurTable' =>  function($sm) {
                    $tableGateway = $sm->get('CCategoryHumeurTableGateway');
                    $table = new CCategoryHumeurTable($tableGateway);
                    return $table;
                },
                'CCategoryHumeurTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new CCategoryHumeur());
                    return new TableGateway('category_humeur', $dbAdapter, null, $resultSetPrototype);
                },
                /********************************* 
                 * METRO PRJ
                 *********************************/
                // Factories for table metro.user
                'Application\Model\CMetroUserTable' =>  function($sm) {
                    $tableGateway = $sm->get('CMetroUserTableGateway');
                    $table = new CMetroUserTable($tableGateway);
                    return $table;
                },
                'CMetroUserTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new CMetroUser());
                    return new TableGateway('metro.user', $dbAdapter, null, $resultSetPrototype);
                },
                // Factories for table metro.ligne
                'Application\Model\CMetroLigneTable' =>  function($sm) {
                    $tableGateway = $sm->get('CMetroLigneTableGateway');
                    $table = new CMetroLigneTable($tableGateway);
                    return $table;
                },
                'CMetroLigneTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new CMetroLigne());
                    return new TableGateway('metro.lignes', $dbAdapter, null, $resultSetPrototype);
                },
            ),
        );
    }

/*
                'Application\Model\CHumeurTable' =>  function($sm) {
                    $tableGateway = $sm->get('CHumeurTableGateway');
                    $table = new CHumeurTable($tableGateway);
                    return $table;
                },
                'CHumeurTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new CHumeur());
                    return new TableGateway('humeur', $dbAdapter, null, $resultSetPrototype);
                },
                'Application\Model\CTypeHumeurTable' =>  function($sm) {
                    $tableGateway = $sm->get('CTypeHumeurTableGateway');
                    $table = new CTypeHumeurTable($tableGateway);
                    return $table;
                },
                'CTypeHumeurTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new CTypeHumeur());
                    return new TableGateway('type_humeur', $dbAdapter, null, $resultSetPrototype);
                },
                'Application\Model\CCommentTable' =>  function($sm) {
                    $tableGateway = $sm->get('CCommentTableGateway');
                    $table = new CCommentTable($tableGateway);
                    return $table;
                },
                'CCommentTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new CComment());
                    return new TableGateway('comment', $dbAdapter, null, $resultSetPrototype);
                },
                'Application\Model\CImageTable' =>  function($sm) {
                    $tableGateway = $sm->get('CImageTableGateway');
                    $table = new CImageTable($tableGateway);
                    return $table;
                },
                'CImageTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new CImage());
                    return new TableGateway('image', $dbAdapter, null, $resultSetPrototype);
                },
                'Application\Model\CUserTable' =>  function($sm) {
                    $tableGateway = $sm->get('CUserTableGateway');
                    $table = new CUserTable($tableGateway);
                    return $table;
                },
                'CUserTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new CUser());
                    return new TableGateway('user', $dbAdapter, null, $resultSetPrototype);
                },
*/
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
