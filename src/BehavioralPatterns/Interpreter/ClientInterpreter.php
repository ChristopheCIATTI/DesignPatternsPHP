<?php

namespace DesignPattern\BehavioralPatterns\Interpreter;

class ClientInterpreter
{
    /**
     * 
     * @var unknown
     */
    private $_context;
    
    
    /**
     * 
     * @var unknown
     */
    private $_Terminalexpression;
    
    /**
     * 
     * @var unknown
     */
    private $_NonTerminalexpression;
    
    public function __construct()
    {
        $this->makeContext();
        $this->makeExpression();
    }
    
    private function makeContext()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Interpreter\ClientInterpreter $_context
         */
        $this->_context = new Context();
        $this->_context->getConctext();
    }
    
    private function makeExpression()
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Interpreter\ClientInterpreter $_expression
         */
        $this->_NonTerminalexpression = new NonterminalExpression();
        $this->_NonTerminalexpression->setInterpret($this->_context);
        $this->_NonTerminalexpression->getInterpret();
        
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Interpreter\ClientInterpreter $_Terminalexpression
         */
        $this->_Terminalexpression = new TerminalExpression();
        $this->_Terminalexpression->setNonTerminalExpression($this->_NonTerminalexpression);
        $this->_Terminalexpression->getInterpret();
        $this->showInterpret($this->_Terminalexpression->getInterpret());
    }
    
    /**
     * 
     * @param unknown $interpret
     */
    private function showInterpret($interpret)
    {
        echo "<pre>";
        echo "show Interpret" . "<br/>";
        echo "Context : " . $interpret . "<br/>";
        echo "</pre>";
    }
}
