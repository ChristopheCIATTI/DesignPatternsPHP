<?php

/**
 * index.php
 * 
 * Here I run the different patterns
 */

use DesignPattern\BehavioralPatterns\Observer\ClientObserver;
use DesignPattern\CreationalPatterns\Prototype\ClientPrototype;
use DesignPattern\CreationalPatterns\Singleton\ClientSingleton;

require __DIR__ . "/../vendor/autoload.php";

/**
 * Prototype pattern is run here
 */
echo "Prototype Pattern" . "<br/>";
echo " Example with Prtotype pattern" . "<br/>" . "<br/>";

/**
 * 
 * @var \DesignPattern\CreationalPatterns\Prototype\ClientPrototype $Prototype
 */
$Prototype = new ClientPrototype();


/**
 * Singleton pattern is run here
 */
echo "Singleton Pattern" . "<br/>";
echo " Example with Singleton pattern" . "<br/>" . "<br/>";

/**
 * 
 * @var \DesignPattern\CreationalPatterns\Singleton\ClientSingleton $Singleton
 */
$Singleton = new ClientSingleton();


