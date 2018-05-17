<?php

/*
 * Abstract Abstraction define the implementor behavior here
 */

namespace DesignPattern\StructuralPatterns\Bridge;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractImplementor
{
    abstract public function __construct();
    abstract public function operateImplementor();
}
