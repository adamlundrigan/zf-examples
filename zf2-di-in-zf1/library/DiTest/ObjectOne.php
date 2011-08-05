<?php
namespace DiTest;

/**
 * Dependency Injection Test Object #1
 * @author Adam Lundrigan <adam@lundrigan.ca>
 */
class ObjectOne
{
    /**
     * Instance Identifier
     * @var string
     */
    protected $_id = null;
    
    /**
     * ObjectTwo Dependency
     * @var ObjectTwo
     */
    protected $_objTwo = null;
    
    /**
     * Create new Instance
     */
    public function __construct()
    {
        $this->_id = uniqid();
    }
    
    /**
     * Set Dependency
     * @param ObjectTwo $o
     * @return ObjectOne 
     */
    public function setTwo(ObjectTwo $o)
    {
        $this->_objTwo = $o;
        return $this;
    }
    
    /**
     * String Representation of Instance
     * @return string
     */
    public function __toString()
    {
        ob_start();
        var_dump($this);
        $contents = ob_get_contents();
        ob_clean();
        return $contents;
    }
}
