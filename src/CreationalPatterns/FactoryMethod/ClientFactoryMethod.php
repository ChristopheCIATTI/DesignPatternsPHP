<?php

/*
 * Cient Factory Method,
 * the pattern is run here
 */

namespace DesignPattern\CreationalPatterns\FactoryMethod;

/**
 * 
 * @author Christophe
 *
 */
class ClientFactoryMethod
{
    /**
     * 
     * @var unknown
     */
    private $ConcreteCreator;
    
    public function __construct()
    {
        self::makeProduct(new ConcreteCreatorA());
        self::makeProduct(new ConcreteCreatorB());
    }
    
    /**
     * 
     * @param AbstractCreator $creator
     */
    private function makeProduct(AbstractCreator $creator)
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\FactoryMethod\ClientFactoryMethod $ConcreteCreator
         */
        $this->ConcreteCreator = $creator->factoryMethod();
        
        $this->showProduct($this->ConcreteCreator->getProduct());

    }
    
    /**
     * 
     * @param unknown $product
     */
    private function showProduct($product)
    {
        echo "<pre>";
        echo "show product" . "<br/>";
        echo "product name : " . $product . "<br/>";
        echo "</pre>";
    }
}