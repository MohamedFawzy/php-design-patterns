<?php

require_once 'Creator.php';
require_once 'TextProduct.php';

class TextFactory extends Creator
{
	protected function factoryMethod()
	{
		$product = new TextProduct();
        return($product->getProperties());
    }
}