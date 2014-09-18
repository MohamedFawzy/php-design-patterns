<?php


class CostaCalc extends AbstractHook
{
    protected function addTax()
    {
        $this->_fullCost = $this->_purchased + ( $this->_purchased * 0.7);
    }

    protected function addShippingHook()
    {
        if(!$this->_hookSpecial){
            $this->_hookSpecial += 12.95;
        }
    }

    protected function displayCost()
    {
        echo "Your full cost is $this->fullCost";
    }

}
