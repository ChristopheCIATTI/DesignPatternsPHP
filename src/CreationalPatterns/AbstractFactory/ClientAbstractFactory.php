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
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ClientAbstractFactory $ConcreteProductA
         */
        $this->ConcreteProductA = new ConcreteFactoryA();
        
        $this->ConcreteProductA->createProductA();
        $this->ConcreteProductA->createProductB();
        
        var_dump($this->ConcreteProductA->createProductA());
        echo "<br/>";
        var_dump($this->ConcreteProductA->createProductB());
        
        echo "<br/>";
        echo "<br/>";
        
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\AbstractFactory\ClientAbstractFactory $ConcreteProductB
         */
        $this->ConcreteProductB = new ConcreteFactoryB();
        $this->ConcreteProductB->createProductA();
        $this->ConcreteProductB->createProductB();
        
        var_dump($this->ConcreteProductB->createProductA());
        echo "<br/>";
        var_dump($this->ConcreteProductB->createProductB());
    }
}
