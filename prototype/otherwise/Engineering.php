<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */
include_once('IAcmePrototype.php');
class Engineering extends IAcmePrototype
{
    const UNIT='Engineering';
    private $development ='programming';
    private $design ='design';
    private $sysAd='System Administration';



    public function setDept($orgCode)
    {
        switch($orgCode)
        {
            case 301:
                $this->dept = $this->development;
                break;
            case 302:
                $this->dept = $this->design;
                break;
            case 303:
                $this->dept = $this->sysAd;
                break;
            default:
                $this->dept = 'UnRecognized Engeering !';

        }
    }

    public function getDept()
    {
        return $this->dept;
    }

    public function __clone(){}
}