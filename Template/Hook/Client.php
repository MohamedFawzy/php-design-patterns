<?php

function __autoload($classname)
{
    include $classname . '.php';
}
class Client
{
    private $buyTotal;
    private $gpsNow;
    private $mapNow;
    private $boatNow;
    private $special;
    private $zamCalc;
    function __construct()
    {
        $this->setHTML();
        $this->setCost();
        $this->zamCalc=new CostaCalc();
        $this->zamCalc->templateMethod($this->buyTotal,$this->special);
    }
    private function setHTML()
    {
        $this->gpsNow=$_POST['gps'];
        $this->mapNow=$_POST['map'];
        $this->boatNow=$_POST['boat'];
    }
    private function setCost()
    {
        $this->buyTotal=$this->gpsNow;
        foreach($this->mapNow as $value)
        {
            $this->buyTotal+= $value;
        }
        //Boolean
        $this->special = ($this->buyTotal >= 200);
        $this->buyTotal += $this->boatNow;
    }

}

$client = new Client();