<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */

require_once 'IPrototype.php';
class FemaleProto extends IPrototype
{
    const gender = 'FEMALE';
    public $fecundity;

    public function __construct()
    {
        $this->eyeColor='green';
        $this->wingBeat=200;
        $this->unitEyes=180;
    }

    public function __clone(){}
}