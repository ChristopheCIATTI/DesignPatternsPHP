<?php

namespace DesignPattern\CreationalPatterns\FactoryMethod;

abstract class AbstractProduct
{
    abstract function __construct();
    abstract function getProduct();
}