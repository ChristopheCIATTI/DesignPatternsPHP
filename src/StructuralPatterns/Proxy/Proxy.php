<?php

namespace DesignPattern\StructuralPatterns\Proxy;

/**
 * 
 * @author Christophe
 *
 */
class Proxy extends AbstractSubject
{
    /**
     * 
     * @var unknown
     */
    private $_proxy;
    
    public function __construct()
    {

    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\StructuralPatterns\Proxy\AbstractSubject::request()
     */
    public function request()
    {
        if (!isset($this->_proxy))
        {
            /**
             * 
             * @var \DesignPattern\StructuralPatterns\Proxy\Proxy $_proxy
             */
             $this->_proxy = new RealSubject();
             return $this->request();
        }
        return $this->_proxy->request();   
    }  
}
