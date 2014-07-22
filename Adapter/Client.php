<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */

require_once 'EuroAdapter.php';
require_once 'DollarCalc.php';

class Client
{
    /**
     * @var requsetNow
     */
    private $requestNow;
    /**
     * @var dollaRequest
     */
    private $dollarRequest;

    /**
     * constructor function
     */
    public function __construct()
    {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DollarCalc();
        $euro="&#8364;";
        echo "Euros: $euro" . $this->makeAdapterRequest($this->requestNow)."\n";
        echo "Dollars: $" . $this->makeDollarRequest($this->dollarRequest)."\n";

    }

    /**
     * @param ITarget $req
     * @return mixed
     */
    private function makeAdapterRequest(ITarget $req)
    {
        /**
         * category class called request Calc from EuroAdapter which extend from euroCalc
         */
        return $req->requestCalc(40,50);
    }

    /**
     * @param DollarCalc $req
     * @return int
     */
    private function makeDollarRequest(DollarCalc $req)
    {
        return $req->requestCalc(40,50);
    }


}

$worker = new Client();