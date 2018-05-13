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
        $this->productDirector = new Director($this->productBuilder);
        $this->productDirector->build();
        $this->productDirector->getProduct();
        
        var_dump($this->productDirector->getProduct());
     
    }
}
