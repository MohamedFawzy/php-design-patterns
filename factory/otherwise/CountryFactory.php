<?php

require_once 'Product.php';
require_once 'Creator.php';

class CountryFactory extends Creator
{
	private $country;

	protected function factoryMethod(Product $product)
	{
		$this->country = $product;
		return ($this->country->getProperties());
	}
}