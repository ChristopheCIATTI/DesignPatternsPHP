<?php

namespace DesignPattern\CreationalPatterns\AbstractFactory;

/**
 * 
 * @author Christophe
 *
 */
class ClientAbstractFactory
{ 
    /**
     * 
     * @var unknown
     */
    private $_ConcreteProductA;
    /**
     * 
     * @var unknown
     */
    private $_ConcreteProductB;
    
    public function __construct()
    {
        /*
         * Concrete factory A, for the A family product
         */
        self::makeProduct(new ConcreteFactoryA());
        
        /*
         * Concrete factory B, for the B family product
         */
        self::makeProduct(new ConcreteFactoryB());
     }
     
     /**
      * 
      * @param AbstractFactory $factory
      */
    private function makeProduct(AbstractFactory $factory)
    {
        /*
         * Here the product is created
         */
        
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ClientAbstractFactory $_ConcreteProductA
         */
        $this->_ConcreteProductA = $factory->createProductA();
        
        /**
         * 
         * @var Ambiguous $_ConcreteProductB
         */
        $this->_ConcreteProductB = $factory->createProductB();
        
        $this->showProduct( $this->_ConcreteProductA->getProduct(), $this->_ConcreteProductB->getProduct());
    }
    
    /**
     * show product, this method display the product
     * @param unknown $_ConcreteProductA
     * @param unknown $_ConcreteProductB
     */
    private function showProduct($_ConcreteProductA, $_ConcreteProductB)
    {
        echo "<pre>";
        echo "show product" . "<br/>";
        echo "product name : " . $_ConcreteProductA . "<br/>";
        echo "product name : " . $_ConcreteProductB . "<br/>";
        echo "</pre>";
    }
    
}
