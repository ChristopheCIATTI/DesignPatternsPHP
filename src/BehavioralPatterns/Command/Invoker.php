<?php

namespace DesignPattern\BehavioralPatterns\Command;

/**
 * 
 * @author Christophe
 *
 */
class Invoker
{
    /**
     * 
     * @var unknown
     */
    private $_invoker;
    
    /**
     * 
     * @param AbstractCommand $command
     */
    public function __construct(AbstractCommand $command)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Command\Invoker $_invoker
         */
        $this->_invoker = $command;
    }
    
    public function action()
    {
        $this->_invoker->execute();
    }
}
