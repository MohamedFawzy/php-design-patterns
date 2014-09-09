<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 * Template Abstract class
 */

abstract class TemplateAbstract
{
    protected $pix;
    protected $cap;

    public function TemplateMethod()
    {
        $this->addPix();
        $this->addCaption();
    }

    protected abstract function addPix();
    protected abstract function addCaption();
}