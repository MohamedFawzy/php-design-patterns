<?php

require_once 'CountryFactory.php';
require_once 'TestProduct.php';


class Client
{
	private $countryFactory;


	public function __construct()
	{
		$this->countryFactory = new CountryFactory();
		$this->countryFactory->doFactory(new TestProduct());
	}
}

$worker = new Client();