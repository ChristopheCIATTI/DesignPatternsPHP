<?php

/*
 * AbstractProduct
 * 
 * represents the complex object under construction. 
 * ConcreteBuilder builds the product's internal representation and defines the process by which it's assembled.
 * 
 * includes classes that define the constituent parts, including interfaces for assembling the parts into the final result
 */

namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractProduct
{
    /**
     * 
     * @var array
     */
    private $data = [];
    
    /**
     * 
     * @param unknown $key
     * @param unknown $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}