<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */
include_once("IFormat.php");
include_once("Mobile.php");
class MobileAdapter implements IFormat
{
    private $mobile;

    public function __construct(IMobileFormat $mobileNow)
    {
        $this->mobile = $mobileNow;
    }

    public function formatCss()
    {
        $this->mobile->formatCss();
    }

    public function formatGraphics()
    {
        $this->mobile->formatGraphics();
    }

    public function horizontalLayout()
    {
        $this->mobile->verticalLayout();
    }

}