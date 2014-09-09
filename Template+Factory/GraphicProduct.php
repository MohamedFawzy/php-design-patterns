<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 * Graphic Product implement interface product
 */

class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct="<img src='pix/modig.png'>";
        return $this->mfgProduct;
    }
}