<?php

require_once 'Product.php';
class GraphicProudct implements Product
{
	private $mfgProduct;

	public function getProperties()
	{
		$this->mfgProduct = 'this is a graphic product <3';
		return $this->mfgProduct;
	}
} 