<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
        
    /**
     * Set up resource injector
     * @see http://weierophinney.net/matthew/archives/235-A-Simple-Resource-Injector-for-ZF-Action-Controllers.html
     */
    protected function _initResourceInjector()
    {
        $this->bootstrap('di');        
        Zend_Controller_Action_HelperBroker::addHelper(
            new My_ResourceInjector(array(
                'di'
            ))
        );
    }

}

