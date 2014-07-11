<?php

require_once 'Product.php';

class TextProduct implements Product
{
	private $mfgProduct;

	public function getProperties()
	{
		$this->mfgProduct = 'this is a text product';
		return $this->mfgProduct;
	}
}