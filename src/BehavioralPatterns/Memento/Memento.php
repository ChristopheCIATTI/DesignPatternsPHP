<?php

namespace DesignPattern\BehavioralPatterns\Memento;

/**
 * 
 * @author Christophe
 *
 */
class Memento
{
    /**
     * 
     * @var unknown
     */
    public $_mementoState;

    /**
     * 
     * @param Originator $originator
     */
    public function __construct(Originator $originator)
    {
        $this->setState($originator->_originatorState);
    }
    
    /**
     * 
     * @param unknown $state
     */
    public function setState($state)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Memento\Memento $_mementoState
         */
        $this->_mementoState = $state;
    }
    
    /**
     * 
     * @return \DesignPattern\BehavioralPatterns\Memento\unknown
     */
    public function getState()
    {
        return $this->_mementoState;
    }
}
