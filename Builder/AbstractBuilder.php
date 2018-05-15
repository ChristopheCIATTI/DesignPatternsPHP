<?php

namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractBuilder
{
    abstract public function __construct();
    abstract public function buildPartA();
    abstract public function buildPartB();
    abstract public function getProduct();
}
