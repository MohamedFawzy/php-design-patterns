<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */

class EuroCalc
{
    protected  $euro;
    protected  $product;
    protected  $service;
    protected  $rate=1;

    /**
     * @param $productNow
     * @param $serviceNow
     * @return int
     */
    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->euro = $this->product + $this->service;
        return $this->requestTotal();
    }

    /**
     * @return int
     */
    public function requestTotal()
    {
         $this->euro *= $this->rate;
        return $this->euro;
    }

}