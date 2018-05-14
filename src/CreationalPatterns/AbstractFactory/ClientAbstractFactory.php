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
    private $ConcreteProductA;
    /**
     * 
     * @var unknown
     */
    private $ConcreteProductB;
    
    public function __construct()
    {
        self::makeProduct(new ConcreteFactoryA());
        self::makeProduct(new ConcreteFactoryB());
     }
     
     /**
      * 
      * @param AbstractFactory $factory
      */
    private function makeProduct(AbstractFactory $factory)
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ClientAbstractFactory $ConcreteProductA
         */
        $this->ConcreteProductA = $factory->createProductA();
        
        /**
         * 
         * @var Ambiguous $ConcreteProductB
         */
        $this->ConcreteProductB = $factory->createProductB();
        
        $this->showProduct( $this->ConcreteProductA->getProduct(), $this->ConcreteProductB->getProduct());
    }
    
    /**
     * 
     * @param unknown $ConcreteProductA
     * @param unknown $ConcreteProductB
     */
    private function showProduct($ConcreteProductA, $ConcreteProductB)
    {
        echo "<pre>";
        echo "show product" . "<br/>";
        echo "product name : " . $ConcreteProductA . "<br/>";
        echo "product name : " . $ConcreteProductB . "<br/>";
        echo "</pre>";
    }
    
}
