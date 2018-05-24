<?php

namespace DesignPattern\BehavioralPatterns\Command;

/**
 * 
 * @author Christophe
 *
 */
class ClientCommand
{
    /**
     * 
     * @var unknown
     */
    private $_concreteCommand;
    
    public function __construct()
    {
        $this->makeReceiver();
    }
    
    private function makeReceiver()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Command\ClientCommand $_concreteCommand
         */
        $this->_concreteCommand = new ConcreteCommand(new Receiver());
        $this->showReceiver($this->_concreteCommand->execute());
    }
    
    /**
     * 
     * @param unknown $receiver
     */
    private function showReceiver($receiver)
    {
        echo "<pre>";
        echo "show Receiver" . "<br/>";
        echo "Receiver : " . $receiver . "<br/>";
        echo "</pre>";
    }
}
