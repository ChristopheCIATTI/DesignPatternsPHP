<?php

namespace DesignPattern\BehavioralPatterns\Mediator;

/**
 * 
 * @author Christophe
 *
 */
class ClientMediator
{
    /**
     * 
     * @var unknown
     */
    private $_mediator;
    
    /**
     * 
     * @var unknown
     */
    private $_colleague;
    
    public function __construct()
    {
        $this->makeMediator();
    }
    
    private function makeMediator()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Mediator\ClientMediator $_mediator
         */
        $this->_mediator = new ConcreteMediator();
        $this->setColleague(new ConcreteColleagueA($this->_mediator));
        $this->showMediator($this->_colleague->request("Concrete Colleague A"), $this->_colleague->getClass());
        
        $this->setColleague(new ConcreteColleagueB($this->_mediator));
        $this->showMediator($this->_colleague->request("Conctrete Colleague B"),$this->_colleague->getClass());
        
    }
    
    /**
     * 
     * @param AbstractColleague $colleague
     */
    private function setColleague(AbstractColleague $colleague)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Mediator\ClientMediator $_colleague
         */
        $this->_colleague = $colleague;
    }

    /**
     * 
     * @param unknown $mediator
     * @param unknown $colleagueClass
     */
    private function showMediator($mediator, $colleagueClass)
     {
         echo "<pre>";
         echo "show Mediator" . "<br/>";
         echo "Message : " . $mediator . "<br/>";
         echo "Colleague Name : " . $colleagueClass . "<br/>";
         echo "</pre>";
     }
    
}
