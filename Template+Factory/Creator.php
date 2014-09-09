<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 * Creator abstract class
 */

abstract class Creator
{
    protected abstract function factoryMethod();

    public function doFactory()
    {
        $mfg = $this->factoryMethod();
        return $mfg;
    }
}