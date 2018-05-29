<?php

namespace DesignPattern\BehavioralPatterns\Mediator;

abstract class AbstractMediator
{
    abstract public function setColleague(AbstractColleague $colleague);
    abstract public function request($message);
}