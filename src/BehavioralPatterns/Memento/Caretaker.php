<?php

namespace DesignPattern\BehavioralPatterns\Memento;

/**
 * 
 * @author Christophe
 *
 */
class Caretaker
{
    /**
     * 
     * @var array
     */
    private $_caretaker = array();
 
    /**
     * 
     * @param Memento $memento
     */
    public function addMemento(Memento $memento)
    {
        $this->_caretaker[] = $memento;
    }
    
    /**
     * 
     * @param unknown $key
     */
    public function getMemento($key)
    {
        return $this->_caretaker[$key];
    }

}
