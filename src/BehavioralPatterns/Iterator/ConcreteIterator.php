<?php

namespace DesignPattern\BehavioralPatterns\Iterator;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteIterator extends AbstractIterator
{
    /**
     * 
     * @var unknown
     */
    public $_iterator;
    
    /**
     * 
     * @var array
     */
    private $_array = array();
    
    /**
     * 
     * @param array $arrayToSort
     */
    public function __construct(array $arrayToSort)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Iterator\ConcreteIterator $_array
         */
        $this->_array = $arrayToSort;    
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\Iterator\AbstractIterator::first()
     */
    public function first() 
    {
        return $this->_iterator = 0;    
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\Iterator\AbstractIterator::next()
     */
    public function next() 
    {
        return ++$this->_iterator;    
    }

    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\Iterator\AbstractIterator::isDone()
     */
    public function isDone()
    {
        return isset($this->_array[$this->_iterator]);    
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\Iterator\AbstractIterator::currentItem()
     */
    public function currentItem()
    {
        return $this->_array[$this->_iterator];    
    }

}
