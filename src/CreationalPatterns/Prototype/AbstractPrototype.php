<?php

/*
 * This is a abstract class, the method is declared but is not calls
 * This is the prototype class
 * This class generate a behavior for the child class.
 */

namespace DesignPattern\CreationalPatterns\Prototype;

/**
 * 
 * @author Christophe
 *
 */
abstract class AbstractPrototype
{
    
    /*
     * Here i declare many varaible with getter and setter
     */
    
    /**
     * 
     * @var unknown
     */
    protected $name;
    /**
     * 
     * @var unknown
     */
    protected $id;
    /**
     * @var unknown
     */
    protected $dateOfBirht;
    /**
     * 
     * @var unknown
     */
    protected $placeOfBirth;
    
    /**
     * 
     * @param unknown $name
     */
    public function setName($name)
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\AbstractPrototype $name
         */
        $this->name = $name;
    }
    
    /**
     * 
     * @return unknown
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * 
     * @param unknown $id
     */
    public function setId($id)
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\AbstractPrototype $id
         */
        $this->id = $id;
    }
    
    /**
     * 
     * @return unknown
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * 
     * @param unknown $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\AbstractPrototype $dateOfBirht
         */
        $this->dateOfBirht = $dateOfBirth;
    }
    
    /**
     * 
     * @return unknown
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirht;
    }
    
    /**
     * @param unknown $placeOfBirth
     */
    abstract function setPlaceOfBirth($placeOfBirth);
    
    abstract function getPlaceOfBirth();
    
    abstract function __clone();
}
