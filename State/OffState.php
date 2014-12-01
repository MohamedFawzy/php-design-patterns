<?php
/**
 * Created by PhpStorm.
 * User: m.fawzy
 * Date: 12/1/14
 * Time: 3:38 PM
 */

class OffState implements IState
{
    private $_context;

    public function __construct(Context $contextNow){
        $this->_context = $contextNow;
    }

    public function turnLightOn(){
        echo "Lights on! Now I can see!<br/>";
        $this->_context->setState($this->_context->getOnState());
    }
    public function turnLightOff(){
        echo "Light is already off-> take no action<br/>";
    }

}