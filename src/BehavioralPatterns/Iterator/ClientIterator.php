<?php

namespace DesignPattern\BehavioralPatterns\Iterator;

/**
 * 
 * @author Christophe
 *
 */
class ClientIterator
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
     * @var array
     */
    private $_array = array(100);
    
    public function __construct()
    {      
        $this->makeArray($this->_array, 100);   
        $this->makeAggregate();
        $this->makeIterator();
        $this->makeOperation();
    }
    
    /**
     * 
     * @param array $array
     * @param int $lenght
     * @return unknown
     */
    private function makeArray(array $array, int $lenght)
    {
        for ($i = null; $i < $lenght-1 ; $i++)
        {
            array_push($array, rand(0, 100));
        }
        return $array;
    }
    
    private function makeAggregate()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Iterator\ClientIterator $_aggregate
         */
        $this->_aggregate= new ConcreteAggregate($this->_array);
    }
    
    private function makeIterator()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Iterator\ClientIterator $_iterator
         */
        $this->_iterator = $this->_aggregate->createIterator();
    }
    
    private function makeOperation()
    {
        $this->_iterator->first();
        $this->showIterator($this->_iterator->first(), "First item");
        
        $this->_iterator->next();
        $this->showIterator($this->_iterator->next(), "Next item");
        
        $this->_iterator->isDone();
        $this->showIterator($this->_iterator->isDone(), "IsDone");
        
        $this->_iterator->first();
        $this->_iterator->currentItem();
        $this->showIterator($this->_iterator->currentItem(), "Current Item value after Fisrt");
    }
    
    /**
     * 
     * @param unknown $iterator
     * @param string $itertorSelector
     */
    private function showIterator($iterator , string $itertorSelector)
    {
        
        echo "<pre>";
        echo "show Iterator : " . $itertorSelector  . "<br/>";
        echo "Iterator : " . $iterator . "<br/>";
        echo "</pre>";
        
    }
}
