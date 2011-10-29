<?php
namespace DiTest;

class ObjectTwo
{
    protected $_id = null;

    public function __construct($id)
    {
        $this->_id = $id;
    }

    public function __toString()
    {
        return 'Object Two = ' . $this->_id ."\n";
    }
}