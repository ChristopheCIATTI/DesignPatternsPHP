<?php

namespace DesignPattern\BehavioralPatterns\Command;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteCommand extends AbstractCommand
{
    /**
     * 
     * @var unknown
     */
    private $_state;
    
    
    /**
     * 
     * @param Receiver $receiver
     */
    public function __construct(Receiver $receiver)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Command\ConcreteCommand $_state
         */
        $this->_state = $receiver;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\Command\AbstractCommand::execute()
     */
    public function execute()
    {
        return $this->_state->action();
    }
}
