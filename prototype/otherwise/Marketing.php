<?php
include_once('IAcmePrototype.php');

class Marketing extends IAcmePrototype
{
    const UNIT ='marketing';
    private $sales='sales';
    private $promitions = 'promitions';
    private $strategic="strategic planning";

    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 101:
                $this->dept= $this->sales;
                break;
            case 102:
                $this->dept = $this->promitions;
                break;
            case 103:
                $this->dept = $this->strategic;
                break;
            default:
                $this->dept = 'Unrecognized marketing';
        }
    }

    public function getDept()
    {
        return $this->dept;
    }

    public function __clone(){}

}