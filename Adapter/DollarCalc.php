<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 * calcute exchange in US Dollar
 */
class DollarCalc
{
    private $dollar;
    private $product;
    private $service;
    private $rate=1;

    /**
     * @param $productNow
     * @param $serviceNow
     * @return int
     */
    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->dollar = $this->product + $this->service;
        return $this->requestTotal();
    }

    /**
     * @return int
     */
    public function requestTotal()
    {
        $this->dollar *= $this->rate;
        return $this->dollar;
    }
}
