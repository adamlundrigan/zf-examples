<?php
namespace DiTest;

class ObjectOne
{
    protected $_id = null;
    protected $_objTwo = null;
    
    public function __construct()
    {
        $this->_id = uniqid();
    }
    
    public function setTwo(ObjectTwo $o)
    {
        $this->_objTwo = $o;
    }
    
    public function __toString()
    {
        return 'Object One = ' . $this->_id ."\n"
               . ' - ' . $this->_objTwo;
    }
}