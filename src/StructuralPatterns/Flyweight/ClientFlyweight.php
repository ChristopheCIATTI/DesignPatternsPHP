<?php

namespace DesignPattern\StructuralPatterns\Flyweight;

/**
 * 
 * @author Christophe
 *
 */
class ClientFlyweight
{
    /**
     * 
     * @var unknown
     */
    private $_FlyweightFactory;
    
    public function __construct()
    {
        $this->makeConcreteFlyweight("ConcreteFlyweight A");
        $this->makeConcreteFlyweight("ConcreteFlyweight B");
        $this->makeConcreteFlyweight("ConcreteFlyweight B");
        $this->makeUnsharedConcreteFlyweight("Unshared Concrete Flyweight");
    }
    
    /**
     * 
     * @param unknown $key
     */
    private function makeConcreteFlyweight(string $key)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Flyweight\ClientFlyweight $_FlyweightFactory
         */
        $this->_FlyweightFactory = new FlyweightFactory();
        $this->_FlyweightFactory->getFlyweight($key);
        $this->showFlyweight($this->_FlyweightFactory->getFlyweight($key));
    }
    
    /**
     * 
     * @param unknown $key
     */
    private function makeUnsharedConcreteFlyweight($key)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Flyweight\ClientFlyweight $_FlyweightFactory
         */
        $this->_FlyweightFactory = new UnsharedConcreteFlyweight($key);
        $this->showFlyweight($this->_FlyweightFactory->operation($key));
    }
    
    /**
     * 
     * @param unknown $key
     */
    private function showFlyweight($key)
    {
        echo "<pre>";
        echo "show Flyweight" . "<br/>";
        echo "Fleyweight key : " . $key . "<br/>";
        echo "</pre>";
    }
}
