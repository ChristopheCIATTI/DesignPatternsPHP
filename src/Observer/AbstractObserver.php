<?php

namespace Observer;


/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractObserver
{
    /**
     * 
     * @param unknown $subject_in
     */
    abstract function update($subject_in);
}
