<?php

require_once 'GraphicFactory.php';
require_once 'TextFactory.php';

class Client
{
	private $someTextObjects;
	private $someGraphicObjects;

	public function __construct()
	{
		$this->someTextObjects = new TextFactory();
		$this->someGraphicObjects = new GraphicFactory();
		echo $this->someTextObjects->startFactory()."\n";
		echo $this->someGraphicObjects->startFactory()."\n";

	}
}

$worker = new Client();

