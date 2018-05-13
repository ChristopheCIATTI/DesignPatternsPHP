<?php

/*
 * Product
 * 
 * for the complete example is ProductA
 * 
 * Here is describe the product
 * 
 */

namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
class Product extends AbstractProduct
{
    private $product;
    
    private $name;
    private $id;
    
    public function __construct()
    {
        
    }
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setId()
    {
        $this->id = $id;
    }
}