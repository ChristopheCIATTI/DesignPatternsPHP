<?php

namespace DesignPattern\StructuralPatterns\Flyweight;

/**
 * 
 * @author Christophe
 *
 */
class FlyweightFactory
{
    /**
     * 
     * @var unknown
     */
    public $_flyweights = [];

    /**
     * 
     * @param unknown $key
     * @return \DesignPattern\StructuralPatterns\Flyweight\unknown
     */
    public function getFlyweight(string $key)
    {
        if (!isset($this->_flyweights[$key])) {
            $this->_flyweights[$key] = new ConcreteFlyweight($key);
            return $this->_flyweights[$key]->operation($key);
        } else {
            return $this->_flyweights[$key]->operation($key);
        }
    }

}
