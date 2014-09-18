<?php


abstract class AbstractHook
{
    protected $_purchased;
    protected $_hookSpecial;
    protected $_shippingHook;
    protected $_fullCost;


    public function templateMethod($total,$special)
    {
        $this->_purchased = $total;
        $this->_hookSpecial = $special;
        $this->addTax();
        $this->addShippingHook();
        $this->displayCost();

    }

    protected abstract function addTax();
    protected abstract function addShippingHook();
    protected abstract function displayCost();
}