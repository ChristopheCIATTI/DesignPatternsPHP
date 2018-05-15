<?php

namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
class Product
{
    /**
     * 
     * @var unknown
     */
    private $_parts;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Builder\Product $_parts
         */
        $this->_parts = array(); 
    }
    
    /**
     * 
     * @param unknown $part
     * @return number
     */
    public function addPart($part)
    {
        return array_push($this->_parts, $part . "\n");
    }
    
    public function showProduct()
    {
        printf("The product consists of : \n");
        array_map("printf", $this->_parts);
    }
}
