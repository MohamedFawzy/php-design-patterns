<?php
/**
 * @author mohamed fawzy
 * @copright GPL
 */

abstract class IPrototype
{
    public $eyeColor;
    public $wingBeat;
    public $unitEyes;

    abstract function __clone();
}
