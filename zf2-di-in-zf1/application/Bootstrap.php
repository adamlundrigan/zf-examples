<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    
    /**
     * Initializing Dependency Injection
     * @return Zend\Di\DependencyInjector 
     */
    public function _initDi()
    {
        // Autoload namespaced library classes
        spl_autoload_register(function($class){
            if (strpos($class, '\\') === false) return;
            $file = str_replace(array('\\','_'), DIRECTORY_SEPARATOR, $class) . '.php';
            return ( false !== ( $file = stream_resolve_include_path($file) ) )
                ? include_once($file)
                : false;
        });
        
        // Autoload namespaced Zend classes from ZF2
        // hacked to force loading from specific tree (ZF2_DIR)
        spl_autoload_register(function($class){
            if (strpos($class, 'Zend') !== 0 || strpos($class, '\\') === false) return;
            $file = ZF2_LIBRARY_PATH . str_replace(array('\\','_'), DIRECTORY_SEPARATOR, $class) . '.php';
            return ( false !== file_exists($file) )
                ? include_once($file)
                : false;
        });

        // Compile DI definitions
        $compiler = new Zend\Di\Definition\Compiler();
        $compiler->addCodeScannerDirectory(
            new Zend\Code\Scanner\DirectoryScanner(
                APPLICATION_PATH . "/../library/DiTest"
            )
        );
        $definitions = $compiler->compile();
        
        // Instantiate DependencyInjector
        $di = new Zend\Di\DependencyInjector();      
        $di->setDefinition($definitions);
        $di->getInstanceManager()->setProperty('DiTest\ObjectTwo', 'id', 'FixedId');

        return $di;
    }
    
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

