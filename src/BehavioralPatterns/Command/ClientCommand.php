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
    private$_receiver;
    
    public function __construct()
    {
        $this->makeReceiver();
    }
    
    private function makeReceiver()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Command\ClientCommand $_receiver
         */
        $this->_receiver = new Receiver();
        $this->showReceiver($this->_receiver->action());
        
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
