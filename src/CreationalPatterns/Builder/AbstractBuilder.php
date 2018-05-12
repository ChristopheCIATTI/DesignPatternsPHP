<?php

/*
 * Interface builder 
 * 
 * specifies an abstract interface for creating parts of a Product object.
 */

namespace DesignPattern\CreationalPatterns\Builder;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractBuilder
{
    abstract function __construct();
    abstract function getProduct();
}
