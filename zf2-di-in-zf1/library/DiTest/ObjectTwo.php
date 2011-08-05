<?php
namespace DiTest;

/**
 * Dependency Injection Test Object #2
 * @author Adam Lundrigan <adam@lundrigan.ca>
 */
class ObjectTwo
{
    /**
     * Instance Identifier
     * @var mixed
     */
    protected $_id = null;
    
    /**
     * Create new Instance
     * @param mixed $id 
     */
    public function __construct($id)
    {
        $this->_id = $id;
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