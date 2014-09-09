<?php
/**
 * class Template Factory
 * @author mohamed fawzy
 * @copyirght GPL
 */
class TemplateFactory extends TemplateAbstract
{
    protected function addPix()
    {
        $this->pix = new GraphicFactory();
        echo $this->pix->doFactory();
    }

    protected function addCaption()
    {
        $this->cap = new TextFactory();
        echo $this->cap->doFactory();
    }
}