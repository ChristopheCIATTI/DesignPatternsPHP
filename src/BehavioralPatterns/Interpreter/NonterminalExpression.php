<?php

namespace DesignPattern\BehavioralPatterns\Interpreter;

/**
 * 
 * @author Christophe
 *
 */
class NonterminalExpression extends AbstractExpression
{
    /**
     * 
     * @var unknown
     */
    private $_expression;
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\BehavioralPatterns\Interpreter\AbstractExpression::interpret()
     */
    public function setInterpret(Context $context)
    {
        /**
         * 
         * @var \DesignPattern\BehavioralPatterns\Interpreter\NonterminalExpression $_interpret
         */
        $this->_expression = $context->getConctext();
    }
    
    public function getInterpret()
    {
        return $this->_expression . " + Nonterminal interpret";
    }

    
}