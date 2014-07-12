<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 */

abstract class CloneMe
{
    public $name;
    public $picture;
    abstract function __clone();
}
