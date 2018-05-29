<?php

namespace DesignPattern\BehavioralPatterns\Mediator;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractColleague
{
    /**
     * 
     * @param unknown $message
     */
    abstract public function request($message);
    abstract public function getClass();

}
