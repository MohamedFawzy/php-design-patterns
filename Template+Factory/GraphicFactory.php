<?php
/**
 * @author mohamed fawzy
 * @copyright GPL
 * Graphic Factory class
 * @see factory design patterns:wikipedia
 */

class GraphicFactory extends Creator
{
    /**
     * @return string
     */
    protected function factoryMethod()
    {
        $product = new GraphicProudct();
        return ($product->getProperties());
    }
}