<?php

namespace DesignPattern\Observer;

class PatternSubject extends AbstractSubject
{
    private $favoritePattern = NULL;
    private $observer = array();
    
    function __construct() {
        
    }
    
    function attach(AbstractObserver $observer_in) {
        $this->observer[] = $observer_in; 
    }
    
    function detach(AbstractObserver $observer_in) {
        foreach ($this->observer as $okay => $oval) {
            if($oval == $observer_in) {
                unset($this->observer[$okay]);
            }
        }
    }
    
    function notify() {
        foreach ($this->observer as $obs){
            $obs->update($this);
        }
    }
    
    function updateFavorites($newFavorites) {
        $this->favorites = $newFavorites;
        $this->notify();
    }
    
    function getFavorites() {
        return $this->favorites;
    }
    
}
