<?php

namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
class ClientBuilder
{
    private $productBuilder = null;
    
    private $productDirector;
    
    public function __construct()
    {
        $this->productBuilder = new ConcreteBuilder();
        $this->productDirector = new Director($productBuilder);
        $this->productDirector->build();
        $produc = $this->productDirector->getProduct();
        
        var_dump($produc);
    }
}
