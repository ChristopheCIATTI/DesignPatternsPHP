<?php

/*
 * AbstractFactory create Factory 
 */

namespace DesignPattern\CreationalPatterns\AbstractFactory;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractFactory
{
    /*
     * Methof of fabirque 
     */
    
    abstract public function createProductA();
    abstract public function createProductB();
}