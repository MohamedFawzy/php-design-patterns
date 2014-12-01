<?php
/**
 * Created by PhpStorm.
 * User: m.fawzy
 * Date: 12/1/14
 * Time: 3:37 PM
 */

class OnState implements IState
{
    private $_context;
    public function __construct(Context $contextNow){
        $this->_context = $contextNow;
    }

    public function turnLightOn(){
        echo "Light is already on-> take no action<br/>";
    }
    public function turnLightOff(){
        echo "Lights off!<br/>";
        $this->_context->setState($this->_context->getOffState());
    }
}