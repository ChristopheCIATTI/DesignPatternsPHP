<?php

namespace DesignPattern\CreationalPatterns\Singleton;

use PHPUnit\Framework\TestCase;


/**
 * 
 * @author Christophe
 *
 */
class SingletonTest extends TestCase
{
    public function testGetInstance()
    {
        $singletonA = Singleton::getInstance();
        $singletonB = Singleton::getInstance();
        
        $this->assertInstanceOf(Singleton::class, $singletonA);
        $this->assertInstanceOf(Singleton::class, $singletonB);
        $this->assertSame($singletonA, $singletonB);
    }
}
