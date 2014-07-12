<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */
require_once 'IPrototype.php';
class MaleProto extends IPrototype
{
    const gender = "MALE";
    public $mated;

    public function __construct()
    {
        $this->eyeColor ='blue';
        $this->wingBeat=220;
        $this->unitEyes=760;
    }
    public function __clone(){}
}