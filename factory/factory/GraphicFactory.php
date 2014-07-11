<?php

require_once 'Creator.php';
require_once 'GraphicProudct.php';

class GraphicFactory extends Creator
{
	protected function factoryMethod()
	{
		$product = new GraphicProudct();
		return($product->getProperties());
	}
}