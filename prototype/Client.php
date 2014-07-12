<?php

//Client.php
function __autoload($class_name)
{
    include $class_name . '.php';
}
class Client
{
    //For direct instantiation
    private $fly1;
    private $fly2;
    //For cloning
    private $c1Fly;
    private $c2Fly;
    private $updatedCloneFly;


    public function __construct()
    {
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();

        $this->c1Fly = clone $this->fly1;
        $this->c2Fly = clone $this->fly2;
        $this->updatedCloneFly = clone $this->c2Fly;

        // update clones
        //update clones
        $this->c1Fly->mated="true";
        $this->c2Fly->fecundity="186";
        $this->updatedCloneFly->eyeColor="purple";
        $this->updatedCloneFly->wingBeat="220";
        $this->updatedCloneFly->unitEyes="750";
        $this->updatedCloneFly->fecundity="92";
        //Send through type hinting method
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);
        $this->showFly($this->updatedCloneFly);
    }

    private function showFly(IPrototype $fly)
    {
        echo "Eye color: " . $fly->eyeColor . "\n";
        echo "Wing Beats/second: " . $fly->wingBeat . "\n";
        echo "Eye units: " . $fly->unitEyes . "\n";
        $genderNow=$fly::gender;
        echo "Gender: " . $genderNow . "\n";
        if($genderNow=="FEMALE")
        {
            echo "Number of eggs: " . $fly->fecundity . "<p/>";
        }
        else {
            echo "Mated: " . $fly->mated . "<p/>";
        }
    }

}

$worker = new Client();