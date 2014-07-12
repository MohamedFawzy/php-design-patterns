<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */
function __autoload($class_name)
{
    include $class_name.'.php';
}

class Client
{
    private $market;
    private $engineer;
    private $manage;

    public function __construct()
    {
        $this->makeConProto();
        $Tess = clone $this->market;
        $this->setEmployee($Tess,"Tess Smith",101,"ts101-1234","tess.png");
        $this->showEmployee($Tess);

        $fawzy = clone $this->market;
        $this->setEmployee($fawzy,"Mohamed fawzy",102,"ts101-12344","fawzy.png");
        $this->showEmployee($fawzy);

        $ricky = clone $this->manage;
        $this->setEmployee($ricky,"Ricky teto", 203,"r3443","ricky.png");
        $this->showEmployee($ricky);

        $Olivia=clone $this->engineer;
        $this->setEmployee($Olivia,"Olivia Perez",302,"op301-1278","olivia.png");
        $this->showEmployee($Olivia);

        $John=clone $this->engineer;
        $this->setEmployee($John,"John Jackson",301,"jj302-1454","john.png");
        $this->showEmployee($John);
    }

    private function makeConProto()
    {
        $this->market=new Marketing();
        $this->manage=new Management();
        $this->engineer=new Engineering();

    }


    private function showEmployee(IAcmePrototype $employeeNow)
    {
        $px=$employeeNow->getPic();
        echo "<img src=$px width='150' height='150'>\n";
        echo $employeeNow->getName() . "\n";
        echo $employeeNow->getDept() . ": " . $employeeNow::UNIT . "\n";
        echo $employeeNow->getID() . "\n\n\n";
    }

    private function setEmployee(IAcmePrototype $employeeNow,$nm,$dp,$id,$px)
    {
        $employeeNow->setName($nm);
        $employeeNow->setDept($dp);
        $employeeNow->setID($id);
        $employeeNow->setPic("pix/$px");
    }
}

$worker = new Client();