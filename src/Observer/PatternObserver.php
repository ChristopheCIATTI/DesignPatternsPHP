<?php

namespace DesignPattern\Observer;

class PatternObserver extends AbstractObserver
{
    public function __construct() {
        
    }
    
    public function update(AbstractSubject $subject_in) {
        echo BR.BR;
        echo "* Just in PatternObserver *" . BR;
        echo "new favorite patterns: ".$subject->getFavorites() .BR;
        echo "End";
        
    }
}
