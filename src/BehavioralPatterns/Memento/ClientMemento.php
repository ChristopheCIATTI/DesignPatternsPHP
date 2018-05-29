<?php

namespace DesignPattern\BehavioralPatterns\Memento;

/**
 * 
 * @author Christophe
 *
 */
class ClientMemento
{
    /**
     * 
     * @var unknown
     */
    private $_caretaker;
    
    /**
     * 
     * @var unknown
     */
    private $_originator;

    /**
     * 
     * @var unknown $_elementA
     * @var unknown $_elementB
     * @var unknown $_elementC
     */
    private $_elementA,
            $_elementB,
            $_elementC;

    public function __construct()
    {
        $this->makeElements();
        $this->makeMemento();
        
        $this->getMemento(0, "Element A");
        $this->getMemento(1, "Element B");
        $this->getMemento(2, "Element C");
    }   
    
    private function makeElements()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Memento\ClientMemento $_elementA
         */
        $this->_elementA = "Element A";
        
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Memento\ClientMemento $_elementB
         */
        $this->_elementB = "Element B";
        
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Memento\ClientMemento $_elementC
         */
        $this->_elementC = "Element C";
    }
    
    private function makeMemento()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Memento\ClientMemento $_originator
         */
        $this->_originator = new Originator();
        
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Memento\ClientMemento $_caretaker
         */
        $this->_caretaker = new Caretaker();
        
        $this->_originator->setState($this->_elementA);
        $this->_caretaker->addMemento($this->_originator->createMemento());
        
        $this->_originator->setState($this->_elementB);
        $this->_caretaker->addMemento($this->_originator->createMemento());
        
        $this->_originator->setState($this->_elementC);
        $this->_caretaker->addMemento($this->_originator->createMemento());
    }
    
    /**
     * 
     * @param unknown $key
     * @param unknown $mementosaved
     */
    private function getMemento($key, $mementosaved)
    {
        $this->_originator->setMemento($this->_caretaker->getMemento($key));
        $this->_originator->getState();
        $this->showMemento($this->_originator->getState(), $mementosaved);
    }
    
    /**
     * 
     * @param unknown $memento
     * @param unknown $mementosaved
     */
    private function showMemento($memento, $mementosaved)
    {
        echo "<pre>";
        echo "show Memento" . "<br/>";
        echo "memento you have save : " . $mementosaved . "<br/>"; 
        echo "you get the Memento : " . $memento . "<br/>";
        echo "</pre>";
    }
}
