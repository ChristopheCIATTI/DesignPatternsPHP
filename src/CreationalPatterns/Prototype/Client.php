<?php

/*
 * This the Client script.
 * The role of this script is to execute the follow pattern.
 * The script use the contrete prototype A and B
 */

namespace DesignPattern\CreationalPatterns\Prototype;

/**
 * 
 * @author Christophe
 *
 */
class Client
{
    /**
     * 
     * @var unknown
     */
    private $ConcretePrototypeA;
    
    /**
     * 
     * @var unknown
     */
    private $ConcretePrototypeB;
    
    /**
     * This is a constructor, the constructor initialize the variable class
     */
    public function __construct()
    {
        /**
         * Call makePeople methods
         */
        $this->makePeople();
        
        /**
         * Clone the variable ConcretePrototypeA in an variable $Me 
         * @var Ambiguous $Me
         */
        $Me = clone $this->ConcretePrototypeA;
        
        /*
         * Call the setPepole methods
         */
        $this->setPeople($Me, "MyName", "00", "1994", "MyPlaceOfBirth");
        
        /*
         * Call the showPeople Methods,this methods display value in the varaible
         */
        $this->showPeople($Me);
        
        /**
         * Clone the class ConcretePrototypeB in an variable $You
         */
        $You = clone $this->ConcretePrototypeB;
        
        /*
         * Call the setPepole methods
         */
        $this->setPeople($You, "YourName", "01", "2000", "YourPlaceOfBirht");
        
        /*
         * Call the showPeople Methods,this methods display value in the varaible
         */
        $this->showPeople($You);
    }
    
    /**
     * New instance of ConcretePrototypeA and ConcretePrototypeB class
     * and instancied in the variable withe the same name
     */
    private function makePeople()
    {
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\Client $ConcretePrototypeA
         */
        $this->ConcretePrototypeA = new ConcretePrototypeA();
        
        /**
         * 
         * @var \DesignPattern\CreationalPatterns\Prototype\Client $ConcretePrototypeB
         */
        $this->ConcretePrototypeB = new ConcretePrototypeB();
    }
    
    /**
     * Add property at the people variable, use the variable of the AbstractPrototype Class
     * @param AbstractPrototype $people
     * @param unknown $name
     * @param unknown $id
     * @param unknown $dateOfBirth
     * @param unknown $placeOfbirth
     */
    private function setPeople(
        AbstractPrototype $people,
        $name,
        $id,
        $dateOfBirth,
        $placeOfbirth)
    {
        $people->setName($name);
        $people->setId($id);
        $people->setDateOfBirth($dateOfBirth);
        $people->setPlaceOfBirth($placeOfBirth);
    }
    
    /**
     * Display the value in people variable
     * @param AbstractPrototype $people
     */
    private function showPeople(AbstractPrototype $people)
    {
        foreach ($people as $key => $value) {
            echo $key . " :" . $value . BR ;
        }
    }  
}
