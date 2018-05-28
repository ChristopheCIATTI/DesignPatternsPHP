<?php

namespace DesignPattern\BehavioralPatterns\Iterator;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteAggregate extends AbstractAggregate
{
    /**
     * 
     * @var unknown
     */
    private $_aggregate;
    
    /**
     * 
     * @var unknown
     */
    private $_iterator;
    
    /**
     * 
     * @param array $array
     */
    public function __construct(array $array)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Iterator\ConcreteAggregate $_aggregate
         */
        $this->_aggregate = $array;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\Iterator\AbstractAggregate::createIterator()
     */
    public function createIterator()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Iterator\ConcreteAggregate $_iterator
         */
        $this->_iterator = new concreteIterator($this->_aggregate);
        return $this->_iterator;
    }
}
