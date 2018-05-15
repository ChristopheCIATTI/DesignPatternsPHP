<?php

namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
class ClientBuilder
{
    /**
     * 
     * @var unknown
     */
    private $_builder;
    
    /**
     * 
     * @var unknown
     */
    private $_director;
    
    /**
     * 
     * @var unknown
     */
    private $_product;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Builder\ClientBuilder $_builder
         */
        $this->_builder = new ConcreteBuilder();
        
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Builder\ClientBuilder $_director
         */
        $this->_director = new Director($this->_builder);
        
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Builder\ClientBuilder $_product
         */
        $this->_product = $this->_director->getProduct();
        $this->showProduct();
        
    }
    
    private function showProduct()
    {
        echo "<pre>";
        echo "Show product" . "<br/>" . "<br/>";
        $this->_product->showProduct();
        echo "</pre>";
    }
}