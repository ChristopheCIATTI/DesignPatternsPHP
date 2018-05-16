<?php

/*
 * Client class
 * You can see, the method specificRequest of adaptee class is here request by Adapter class 
 */

namespace DesignPattern\StructuralPatterns\Adapter;

/**
 * 
 * @author Christophe
 *
 */
class ClientAdapter
{
    /**
     * 
     * @var unknown
     */
    private $_adaptee;
    
    /**
     * 
     * @var unknown
     */
    private $_adapter;
    
    public function __construct()
    {
        /**
         * Instanced Adaptee class
         * 
         * @var \DesignPattern\StructuralPatterns\Adapter\ClientAdapter $_adaptee
         */
        $this->_adaptee = new Adaptee();
        
        /**
         * Instanced Adapter class with Adaptee in argument
         * 
         * @var \DesignPattern\StructuralPatterns\Adapter\ClientAdapter $_adapter
         */
        $this->_adapter = new Adapter($this->_adaptee);
        
        /**
         * And call the method request in adapter class. 
         * 
         */
        $this->_adapter->request();
        
        /*
         * Here show the request content
         */
        $this->showAdapteeRequest($this->_adapter->request());
    }
    
    /**
     * 
     * @param unknown $request
     */
    private function showAdapteeRequest($request)
    {
        echo "<pre>";
        echo "show Adaptee Request" . "<br/>";
        echo "Adaptee Request : " . $request . "<br/>";
        echo "</pre>";
    }
}