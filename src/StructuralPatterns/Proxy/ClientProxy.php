<?php

namespace DesignPattern\StructuralPatterns\Proxy;

class ClientProxy
{
    /**
     * 
     * @var unknown
     */
    private $_proxy;
    
    public function __construct()
    {
        /**
         * 
         * @var \DesignPattern\StructuralPatterns\Proxy\ClientProxy $_proxy
         */
        $this->_proxy = new Proxy();
        $this->showRealSubject($this->_proxy->request());
        
    }
    
    /**
     * 
     * @param unknown $request
     */
    private function showRealSubject($request)
    {
        echo "<pre>";
        echo "show Proxy" . "<br/>";
        echo "Real request : " . $request . "<br/>";
        echo "</pre>";
    }
}
