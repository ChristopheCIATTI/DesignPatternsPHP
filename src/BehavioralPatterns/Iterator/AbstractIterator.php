<?php

namespace DesignPattern\BehavioralPatterns\Iterator;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractIterator
{
    /**
     * 
     * @var unknown
     */
    public $_iterator;
    
    abstract public function first();
    abstract public function next();
    abstract public function isDone();
    abstract public function currentItem();
}
