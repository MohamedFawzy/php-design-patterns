<?php
/**
* @author mohamed fawzy
* @copyright GPL
*/

class formatHelper
{
	private $bottom;
	private $top;

	public function addTop()
	{
		 $this->top="<!doctype html><html><head>
            <link rel='stylesheet' type='text/css' href='products.css'/>
            <meta charset='UTF-8'>
            <title>Map Factory</title>
            </head>
            <body>";
            return $this->top;
	}

	public function closeUp()
 	{
        $this->bottom="</body></html>";
        return $this->bottom;
    }

}