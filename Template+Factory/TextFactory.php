<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 * Text facotry class
 * @see factory:design:patterns:wikipedia
 */

class TextFactory extends Creator
{
    /**
     * @return string
     */
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return ($product->getProperties());
    }
}