<?php

function __autoload($classname){
    include $classname.'.php';
}

class Client
{
    private $_context;

    public function __construct(){
         $this->_context = new Context();
         $this->_context = new Context();
         $this->_context->turnOnLight();
         $this->_context->turnOnLight();
         $this->_context->turnOffLight();
         $this->_context->turnOffLight();
    }
}

$worker = new Client();