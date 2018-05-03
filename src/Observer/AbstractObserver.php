<?php

namespace DesignPattern\Observer;

abstract class AbstractObserver
{
    abstract function update(AbstractSubject $subject_in);
}
