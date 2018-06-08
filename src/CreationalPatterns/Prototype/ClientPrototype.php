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
    private $ConcretePrototype;

    public function __construct()
    {
        self::makeProduct(new ConcretePrototypeA());
        $this->showProduct($this->ConcretePrototype);
        
        self::makeProduct(new ConcretePrototypeB());
        $this->showProduct($this->ConcretePrototype);
    }
    
    /**
     * 
     * @param AbstractPrototype $prototype
     */
    private function makeProduct(AbstractPrototype $prototype)
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\ClientPrototype $ConcretePrototype
         */
        $this->ConcretePrototype = clone $prototype;
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
