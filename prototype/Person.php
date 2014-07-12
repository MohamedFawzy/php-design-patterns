<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */
require_once 'CloneMe.php';
class Person extends CloneMe
{
    public function __construct()
    {
        $this->picture = 'mypicture.jpg';
        $this->name = 'mohamed fawzy';

    }

    public function display()
    {
        echo "<img src='$this->picture'>";
        echo "<br />$this->name <p />\n";
    }

    public function __clone(){}
}

$worker = new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name='cloned';
$slacker->display();