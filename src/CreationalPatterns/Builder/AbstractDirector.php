<?php

namespace DesignPattern\CreationalPatterns\Builder;

abstract class AbstractDirector
{
    abstract function __construct(AbstractBuilder $builder);
    abstract function build();
    abstract function getProduct();
}