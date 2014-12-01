<?php
/**
 * Created by PhpStorm.
 * User: m.fawzy
 * Date: 12/1/14
 * Time: 3:25 PM
 */

class Context
{
    private $_offState;
    private $_onState;
    private $_currentState;

    public function __construct(){
        $this->_offState = new OffState($this);
        $this->_onState = new OnState($this);
        // begining state is off
        $this->_currentState = $this->_offState;
    }

    // call method trigger
    public function turnOnLight(){
        $this->_currentState->turnLightOn();
    }

    public function turnOffLight(){
        $this->_currentState->turnLightOff();
    }

    // set Current state
    public function setState(IState $state){
        $this->_currentState=$state;
    }

    public function getOnState(){
        return $this->_onState;
    }

    public function getOffState(){
        return $this->_offState;
    }
}