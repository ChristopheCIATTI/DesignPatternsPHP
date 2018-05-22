<?php

namespace DesignPattern\StructuralPatterns\Proxy;

/**
 * 
 * @author Christophe
 *
 */
class RealSubject extends AbstractSubject
{
   /**
    * 
    * @var unknown
    */
    private $_realSubject;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Proxy\RealSubject $_realSubject
         */
        $this->_realSubject = "Real Subject";
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Proxy\AbstractSubject::request()
     */
    public function request()
    {
        return $this->_realSubject;    
    }
}