<?php

class IndexController extends Zend_Controller_Action
{
    
    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        echo "<pre>";
        echo "get('DiTest\ObjectOne'):\n";
        echo $this->di->get('DiTest\ObjectOne') . "\n\n";
        echo "get('DiTest\ObjectOne'):\n";
        echo $this->di->get('DiTest\ObjectOne') . "\n\n";
        echo "newInstance('DiTest\ObjectOne'):\n";
        echo $this->di->newInstance('DiTest\ObjectOne') . "\n\n";
        echo "get('DiTest\ObjectOne'):\n";
        echo $this->di->get('DiTest\ObjectOne') . "\n\n";
        echo "\n\n";
        echo "get('DiTest\ObjectTwo'):\n";
        echo $this->di->get('DiTest\ObjectTwo') . "\n\n";
        echo "</pre>";
    }

}

