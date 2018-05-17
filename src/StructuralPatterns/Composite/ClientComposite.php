<?php

/*
 * Client class, the pattern is run here 
 */

namespace DesignPattern\StructuralPatterns\Composite;

/**
 * 
 * @author Christophe
 *
 */
class ClientComposite
{
    /**
     * 
     * @var unknown
     */
    private $_composite;
    
    /**
     * 
     * @var unknown
     */
    private $_leafA;
    
    /**
     * 
     * @var unknown
     */
    private $_leafB;
    
    public function __construct()
    {
        $this->makeComposite(new Composite());
        
        $this->makeLeafA(new LeafA());
        $this->_leafA->operation();
        
        $this->makeLeafB(new LeafB());
        $this->_leafB->operation();
        
        $this->_composite->add($this->_leafA);
        $this->_composite->add($this->_leafB);
        $this->_composite->add($this->_leafA);
        $this->_composite->operation();
        $this->_composite->getChild();
        $this->showComposite("add leaf", $this->_composite->getChild());
        
        $this->_composite->remove($this->_leafB);
        $this->showComposite("remove leafA", $this->_composite->getChild());
    }
    
    /**
     * 
     * @param InterfaceComponent $component
     */
    private function makeComposite(InterfaceComponent $component)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Composite\ClientComposite $_composite
         */
        $this->_composite = $component;
    }
    
    /**
     * 
     * @param InterfaceComponent $leaf
     */
    private function makeLeafA(InterfaceComponent $leaf)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Composite\ClientComposite $_leafA
         */
        $this->_leafA = $leaf;
    }
    
    /**
     * 
     * @param InterfaceComponent $leaf
     */
    private function makeLeafB(InterfaceComponent $leaf)
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Composite\ClientComposite $_leafB
         */
        $this->_leafB = $leaf;
    }
    
    /**
     * 
     * @param unknown $event
     * @param unknown $composite
     */
    private function showComposite($event, $composite)
    {
        foreach ($composite as $value)
        {
            echo "<pre>";
            echo "show Composite" . "<br/>";
            echo "Event is " . $event . "<br/>" .
                 "Composite Element : " . $value->operation()/*print_r($value)*/ . "<br/>";//foreach
            echo "</pre>";
        }
    }
}