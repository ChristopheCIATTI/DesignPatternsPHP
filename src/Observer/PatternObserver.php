<?php

namespace Observer;

/**
 * 
 * @author Christophe
 *
 */
class PatternObserver extends AbstractObserver
{
    public function __construct() {
        
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \DesignPattern\Observer\AbstractObserver::update()
     */
    public function update(AbstractSubject $subject_in) {
        echo BR.BR;
        echo '*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*'.BR;
        echo ' new favorite patterns: '.$subject->getFavorites().BR;
        echo '*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*'.BR;    
    }
}
