<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 *
 */
include_once('AbstractClass.php');

class ConcreteClass extends AbstractClass
{
    public function addPix($pix)
    {
        $this->pix=$pix;
        $this->pix = "pix/" . $this->pix;
        $formatter = "<img src=$this->pix>\n";
        echo $formatter;

    }

    public function addCaption($cap)
    {
        $this->cap=$cap;
        echo "<em>Caption:</em>" . $this->cap . "\n";
    }
}

