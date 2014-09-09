<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 * Abstract class for template design pattern
 */

abstract class AbstractClass
{
    protected $pix;
    protected $cap;

    /**
     * @param $picNow
     * @param $capNow
     */
    public function TemplateMethod($picNow, $capNow)
    {
        $this->pix = $picNow;
        $this->cap = $capNow;
        $this->addPix($this->pix);
        $this->addCaption($this->cap);

    }

    abstract protected function addPix($pix);
    abstract protected function addCaption($cap);

}