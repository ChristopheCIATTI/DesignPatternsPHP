<?php

namespace DesignPattern\StructuralPatterns\Flyweight;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractFlyweight
{
    /**
     * 
     * @param unknown $extrinsicState
     */
    abstract public function operation($extrinsicState);
}