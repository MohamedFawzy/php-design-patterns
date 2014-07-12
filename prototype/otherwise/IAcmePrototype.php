<?php

abstract class IAcmePrototype
{
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    // Dept
    abstract function setDept($dept);
    abstract function getDept();
    // name
    public function setName($name)
    {
        $this->name =$name;
    }
    public function getName()
    {
        return $this->name;
    }
    //ID
    public function setId($id)
    {
        $this->id =$id;
    }
    public function getId()
    {
        return $this->id;
    }
    // employee picture
    public function setPic($pic)
    {
        $this->employeePic=$pic;
    }
    public function getPic()
    {
        return $this->employeePic;
    }

    abstract function __clone();



}
