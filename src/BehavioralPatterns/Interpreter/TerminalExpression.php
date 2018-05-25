<?php

namespace DesignPattern\BehavioralPatterns\Interpreter;

class TerminalExpression extends AbstractExpression
{
    /**
     * 
     * @var unknown
     */
    private $_expression;
    
    private $_nonTerminalExpression;
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\Interpreter\AbstractExpression::interpret()
     */
    public function setInterpret(Context $context)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Interpreter\TerminalExpression $_expression
         */
        $this->_expression = $context->getConctext();    
    }

    public function setNonTerminalExpression(NonterminalExpression $nonTerminalExpression)
    {
        $this->_nonTerminalExpression = $nonTerminalExpression->getInterpret();
    }
    
    public function getInterpret()
    {
        return $this->_expression . $this->_nonTerminalExpression . " + Terminal interpret";
    }
    
    
}
