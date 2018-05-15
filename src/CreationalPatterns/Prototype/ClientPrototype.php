<?php

namespace DesignPattern\CreationalPatterns\Prototype;

/**
 * 
 * @author Christophe
 *
 */
class ClientPrototype
{
    /**
     * 
     * @var unknown
     */
    private $ConcretePrototypeA;
    
    /**
     * 
     * @var unknown
     */
    private $ConcretePrototypeB;
    
    public function __construct()
    {
        $this->makeProduct();
        /**
         * 
         * @var Ambiguous $productA
         */
        $productA = clone $this->ConcretePrototypeA;
        $this->showProduct($productA);
        
        /**
         * 
         * @var Ambiguous $productB
         */
        $productB = clone $this->ConcretePrototypeB;
        $this->showProduct($productB);
    }
    
    private function makeProduct()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\ClientPrototype $ConcretePrototypeA
         */
        $this->ConcretePrototypeA = new ConcretePrototypeA();
        
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\ClientPrototype $ConcretePrototypeB
         */
        $this->ConcretePrototypeB = new ConcretePrototypeB();
    }

    /**
     * 
     * @param AbstractPrototype $prototype
     */
    private function showProduct(AbstractPrototype $prototype)
    {
        echo "<pre>";
        echo "Show product : " . "<br/>";
        echo "Product : " . $prototype->getProduct();
        echo "</pre>";
    }
}
