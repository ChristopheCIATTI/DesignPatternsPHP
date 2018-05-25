<?php

namespace DesignPattern\BehavioralPatterns\Interpreter;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractExpression
{
    abstract public function setInterpret(Context $context);
    abstract public function getInterpret();
}
