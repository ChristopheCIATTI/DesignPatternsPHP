<?php

namespace DesignPattern\BehavioralPatterns\Mediator;

/**
 * 
 * @author Christophe
 *
 */
class ConcreteMediator extends AbstractMediator
{
    /**
     * 
     * @var unknown
     */
    private $_colleague;
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\Mediator\AbstractMediator::setColleague()
     */
    public function setColleague(AbstractColleague $colleague)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Mediator\ConcreteMediator $_colleague
         */
        $this->_colleague = $colleague;
    }

    /**
     * 
     * @param unknown $message
     */
    public function request($message)
    {
        $this->_colleague->request($message);
    }

}
