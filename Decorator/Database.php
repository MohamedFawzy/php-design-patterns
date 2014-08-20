<?php
/**
 * Database Class
 * @author mohamed fawzy
 * @copyright GPL
 */

class Database extends Decorator
{
    public function __construct(IComponent $siteNow)
    {
        $this->site = $siteNow;
    }

    public  function getSite()
    {
        $fmat="<br/>&nbsp;&nbsp; MySQL Database ";
        return $this->site->getSite() . $fmat;
    }

    public function getPrice()
    {
        return 800 + $this->site->getPrice();
    }
}