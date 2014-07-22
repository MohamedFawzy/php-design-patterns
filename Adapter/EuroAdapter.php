<?php
/**
 * @autohr mohamed fawzy
 * @copyright GPL
 */

require_once 'EuroCalc.php';
require_once 'ITarget.php';

class EuroAdapter extends EuroCalc implements ITarget
{

    public function __construct()
    {
        $this->requester();
    }

    /**
     * @return float
     */
    public function requester()
    {
        $this->rate= .8111;
        return $this->rate;
    }
}