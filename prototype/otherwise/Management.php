<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */
include_once('IAcmePrototype.php');
class Management extends IAcmePrototype
{
    const UNIT ='Management';
    private $research='research';
    private $plan = 'planing';
    private $opreations = 'operations';
    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 201:
                $this->dept = $this->research;
                break;
            case 202:
                $this->dept = $this->plan;
                break;
            case 203:
                $this->dept = $this->opreations;
                break;
            default:
                $this->dept = 'UnRecognized Management';
        }

    }
    public function getDept()
    {
        return $this->dept;
    }

    public function __clone(){}
}