<?php

namespace DesignPattern\BehavioralPatterns\Iterator;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractAggregate
{
    abstract public function createIterator();
}