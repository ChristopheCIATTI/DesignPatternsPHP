<?php

namespace Observer;


/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractSubject
{
    /**
     * 
     * @param AbstractObserver $observer_in
     */
    abstract function attach(AbstractObserver $observer_in);
    
    /**
     * 
     * @param AbstractObserver $observer_in
     */
    abstract function detach(AbstractObserver $observer_in);
    
    /**
     * 
     */
    abstract function notify();
}
