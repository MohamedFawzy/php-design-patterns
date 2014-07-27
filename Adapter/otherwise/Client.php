<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */
require_once 'Mobile.php';
require_once 'MobileAdapter.php';
class Client
{

    private $mobile;
    private $mobileAdapter;

    public function __construct()
    {
        $this->mobile = new Mobile();
        $this->mobileAdapter = new MobileAdapter($this->mobile);
        $this->mobileAdapter->formatCss();
        $this->mobileAdapter->formatGraphics();
        $this->mobileAdapter->horizontalLayout();
        $this->mobile->closeHTML();
    }

}


$worker = new Client();