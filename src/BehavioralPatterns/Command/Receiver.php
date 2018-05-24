<?php

namespace DesignPattern\BehavioralPatterns\Command;

class Receiver
{
    /**
     * 
     * @var unknown
     */
    private $_receiver;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Command\Receiver $_receiver
         */
        $this->_receiver = "Receiver class";
    }
    
    /**
     * 
     * @return \DesignPattern\BehavioralPatterns\Command\unknown
     */
    public function action()
    {
        return $this->_receiver;    
    }
}
