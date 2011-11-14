<?php

/**
 * Bootstrap Resource Injector
 * @author Matthew Weier O'Phinney
 * @see http://weierophinney.net/matthew/archives/235-A-Simple-Resource-Injector-for-ZF-Action-Controllers.html
 */
class My_ResourceInjector extends Zend_Controller_Action_Helper_Abstract
{
    protected $_resources;

    public function __construct(array $resources = array())
    {
        $this->_resources = $resources;
    }

    public function preDispatch()
    {
        $bootstrap  = $this->getBootstrap();
        $controller = $this->getActionController();
        foreach ($this->_resources as $name) {
            if ($bootstrap->hasResource($name)) {
                $controller->$name = $bootstrap->getResource($name);
            }
        }
    }

    public function getBootstrap()
    {
        return $this->getFrontController()->getParam('bootstrap');
    }
}