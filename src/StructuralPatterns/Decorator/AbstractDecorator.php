<?php

namespace DesignPattern\StructuralPatterns\Decorator;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractDecorator extends AbstractComponent
{
    abstract public function getDecorator();
}