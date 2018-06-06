<?php

/*
 * Client class, here the pattern is used
 */

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
    private $_builderA;
    
    /**
     * 
     * @var unknown
     */
    private $_builderB;
    
    /**
     * 
     * @var unknown
     */
    private $_directorA;
    
    /**
     * 
     * @var unknown
     */
    private $_directorB;
    
    /**
     * 
     * @var unknown
     */
    private $_product;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Builder\ClientBuilder $_builderA
         */
        $this->_builderA = new ConcreteBuilderA();
        $this->_builderB = new ConcreteBuilderB();
        
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Builder\ClientBuilder $_director
         */
        $this->_directorA = new Director($this->_builderA);
        $this->_directorB = new Director($this->_builderB);
        
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Builder\ClientBuilder $_product
         */
        $this->_product = $this->_directorA->getProduct();
        $this->showProduct();
        $this->_product = $this->_directorB->getProduct();
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