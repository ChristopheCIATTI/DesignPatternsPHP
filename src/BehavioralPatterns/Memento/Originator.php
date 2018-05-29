<?php

namespace DesignPattern\BehavioralPatterns\Memento;

/**
 * 
 * @author Christophe
 *
 */
class Originator
{
    /**
     * 
     * @var unknown
     */
    public $_originatorState;
    
    /**
     * 
     * @param Memento $memento
     */
    public function setMemento(Memento $memento)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Memento\Originator $_originatorState
         */
        $this->_originatorState = $memento->getState();
    }
    
    /**
     * 
     * @return \DesignPattern\BehavioralPatterns\Memento\Memento
     */
    public function createMemento()
    {
        return new Memento($this);
    }
    
    /**
     * 
     * @param unknown $state
     */
    public function setState($state)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Memento\Originator $_originatorState
         */
        $this->_originatorState = $state;
    }
    
    /**
     * 
     * @return \DesignPattern\BehavioralPatterns\Memento\unknown
     */
    public function getState()
    {
        return $this->_originatorState;
    }

}
