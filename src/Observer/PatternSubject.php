<?php

namespace Observer;


/**
 * 
 * @author Christophe
 *
 */
class PatternSubject extends AbstractSubject
{
    /**
     * 
     * @var unknown
     */
    private $favoritePattern = NULL;
    
    /**
     * 
     * @var array
     */
    private $observer = array();
    
    /**
     * 
     */
    function __construct() {
        
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Observer\AbstractSubject::attach()
     */
    function attach(AbstractObserver $observer_in) {
        $this->observer[] = $observer_in; 
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Observer\AbstractSubject::detach()
     */
    function detach(AbstractObserver $observer_in) {
        foreach ($this->observer as $okay => $oval) {
            if($oval == $observer_in) {
                unset($this->observer[$okay]);
            }
        }
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Observer\AbstractSubject::notify()
     */
    function notify() {
        foreach ($this->observer as $obs){
            $obs->update($this);
        }
    }
    
    /**
     * 
     * @param unknown $newFavorites
     */
    function updateFavorites($newFavorites) {
        $this->favorites = $newFavorites;
        $this->notify();
    }
    
    /**
     * 
     * @return unknown
     */
    function getFavorites() {
        return $this->favorites;
    }
    
}
