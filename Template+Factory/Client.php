<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 * Client class for request template
 */

function __autoload($classname)
{
    include $classname.'.php';
}

class Client
{
    /**
     * constructor
     */
    public function __construct()
    {
        $object = new TemplateFactory();
        $object->templateMethod();
    }
}

$worker = new Client();